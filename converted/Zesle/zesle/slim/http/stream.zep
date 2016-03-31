/**
 * Slim Framework (http://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim
 * @copyright Copyright (c) 2011-2016 Josh Lockhart
 * @license   https://github.com/slimphp/Slim/blob/3.x/LICENSE.md (MIT License)
 */
namespace Zesle\Slim\Http;

use InvalidArgumentException;
use Zesle\Psr\Http\Message\StreamInterface;
use RuntimeException;
/**
 * Represents a data stream as defined in PSR-7.
 *
 * @link https://github.com/php-fig/http-message/blob/master/src/StreamInterface.php
 */
class Stream implements StreamInterface
{
    /**
     * Resource modes
     *
     * @var  array
     * @link http://php.net/manual/function.fopen.php
     */
    protected static modes = ["readable" : ["r", "r+", "w+", "a+", "x+", "c+"], "writable" : ["r+", "w", "w+", "a", "a+", "x", "x+", "c", "c+"]];
    /**
     * The underlying stream resource
     *
     * @var resource
     */
    protected stream;
    /**
     * Stream metadata
     *
     * @var array
     */
    protected meta;
    /**
     * Is this stream readable?
     *
     * @var bool
     */
    protected readable;
    /**
     * Is this stream writable?
     *
     * @var bool
     */
    protected writable;
    /**
     * Is this stream seekable?
     *
     * @var bool
     */
    protected seekable;
    /**
     * The size of the stream if known
     *
     * @var null|int
     */
    protected size;
    /**
     * Create a new Stream.
     *
     * @param  resource $stream A PHP resource handle.
     *
     * @throws InvalidArgumentException If argument is not a resource.
     */
    public function __construct(stream) -> void
    {
        this->attach(stream);
    }
    
    /**
     * Get stream metadata as an associative array or retrieve a specific key.
     *
     * The keys returned are identical to the keys returned from PHP's
     * stream_get_meta_data() function.
     *
     * @link http://php.net/manual/en/function.stream-get-meta-data.php
     *
     * @param string $key Specific metadata to retrieve.
     *
     * @return array|mixed|null Returns an associative array if no key is
     *     provided. Returns a specific key value if a key is provided and the
     *     value is found, or null if the key is not found.
     */
    public function getMetadata(string key = null)
    {
        let this->meta =  stream_get_meta_data(this->stream);
        if is_null(key) === true {
            return this->meta;
        }
        return  isset this->meta[key] ? this->meta[key]  : null;
    }
    
    /**
     * Is a resource attached to this stream?
     *
     * Note: This method is not part of the PSR-7 standard.
     *
     * @return bool
     */
    protected function isAttached() -> bool
    {
        return is_resource(this->stream);
    }
    
    /**
     * Attach new resource to this object.
     *
     * Note: This method is not part of the PSR-7 standard.
     *
     * @param resource $newStream A PHP resource handle.
     *
     * @throws InvalidArgumentException If argument is not a valid PHP resource.
     */
    protected function attach(newStream) -> void
    {
        if is_resource(newStream) === false {
            throw new InvalidArgumentException(__METHOD__ . " argument must be a valid PHP resource");
        }
        if this->isAttached() === true {
            this->detach();
        }
        let this->stream = newStream;
    }
    
    /**
     * Separates any underlying resources from the stream.
     *
     * After the stream has been detached, the stream is in an unusable state.
     *
     * @return resource|null Underlying PHP stream, if any
     */
    public function detach()
    {
        var oldResource;
    
        let oldResource =  this->stream;
        let this->stream =  null;
        let this->meta =  null;
        let this->readable =  null;
        let this->writable =  null;
        let this->seekable =  null;
        let this->size =  null;
        return oldResource;
    }
    
    /**
     * Reads all data from the stream into a string, from the beginning to end.
     *
     * This method MUST attempt to seek to the beginning of the stream before
     * reading data and read the stream until the end is reached.
     *
     * Warning: This could attempt to load a large amount of data into memory.
     *
     * This method MUST NOT raise an exception in order to conform with PHP's
     * string casting operations.
     *
     * @see http://php.net/manual/en/language.oop5.magic.php#object.tostring
     * @return string
     */
    public function __toString() -> string
    {
        var e;
    
        if !(this->isAttached()) {
            return "";
        }
        try {
            this->rewind();
            return this->getContents();
        } catch RuntimeException, e {
            return "";
        }
    }
    
    /**
     * Closes the stream and any underlying resources.
     */
    public function close() -> void
    {
        if this->isAttached() === true {
            fclose(this->stream);
        }
        this->detach();
    }
    
    /**
     * Get the size of the stream if known.
     *
     * @return int|null Returns the size in bytes if known, or null if unknown.
     */
    public function getSize()
    {
        var stats;
    
        if !(this->size) && this->isAttached() === true {
            let stats =  fstat(this->stream);
            let this->size =  isset stats["size"] ? stats["size"]  : null;
        }
        return this->size;
    }
    
    /**
     * Returns the current position of the file read/write pointer
     *
     * @return int Position of the file pointer
     *
     * @throws RuntimeException on error.
     */
    public function tell() -> int
    {
        var position;
    
        let position =  ftell(this->stream);
        if !(this->isAttached()) || position === false {
            throw new RuntimeException("Could not get the position of the pointer in stream");
        }
        return position;
    }
    
    /**
     * Returns true if the stream is at the end of the stream.
     *
     * @return bool
     */
    public function eof() -> bool
    {
        return  this->isAttached() ? feof(this->stream)  : true;
    }
    
    /**
     * Returns whether or not the stream is readable.
     *
     * @return bool
     */
    public function isReadable() -> bool
    {
        var meta, mode;
    
        if this->readable === null {
            let this->readable =  false;
            if this->isAttached() {
                let meta =  this->getMetadata();
                for mode in self::modes["readable"] {
                    if strpos(meta["mode"], mode) === 0 {
                        let this->readable =  true;
                        break;
                    }
                }
            }
        }
        return this->readable;
    }
    
    /**
     * Returns whether or not the stream is writable.
     *
     * @return bool
     */
    public function isWritable() -> bool
    {
        var meta, mode;
    
        if this->writable === null {
            let this->writable =  false;
            if this->isAttached() {
                let meta =  this->getMetadata();
                for mode in self::modes["writable"] {
                    if strpos(meta["mode"], mode) === 0 {
                        let this->writable =  true;
                        break;
                    }
                }
            }
        }
        return this->writable;
    }
    
    /**
     * Returns whether or not the stream is seekable.
     *
     * @return bool
     */
    public function isSeekable() -> bool
    {
        var meta;
    
        if this->seekable === null {
            let this->seekable =  false;
            if this->isAttached() {
                let meta =  this->getMetadata();
                let this->seekable = meta["seekable"];
            }
        }
        return this->seekable;
    }
    
    /**
     * Seek to a position in the stream.
     *
     * @link http://www.php.net/manual/en/function.fseek.php
     *
     * @param int $offset Stream offset
     * @param int $whence Specifies how the cursor position will be calculated
     *     based on the seek offset. Valid values are identical to the built-in
     *     PHP $whence values for `fseek()`.  SEEK_SET: Set position equal to
     *     offset bytes SEEK_CUR: Set position to current location plus offset
     *     SEEK_END: Set position to end-of-stream plus offset.
     *
     * @throws RuntimeException on failure.
     */
    public function seek(int offset, int whence = SEEK_SET) -> void
    {
        // Note that fseek returns 0 on success!
        if !(this->isSeekable()) || fseek(this->stream, offset, whence) === -1 {
            throw new RuntimeException("Could not seek in stream");
        }
    }
    
    /**
     * Seek to the beginning of the stream.
     *
     * If the stream is not seekable, this method will raise an exception;
     * otherwise, it will perform a seek(0).
     *
     * @see seek()
     *
     * @link http://www.php.net/manual/en/function.fseek.php
     *
     * @throws RuntimeException on failure.
     */
    public function rewind() -> void
    {
        if !(this->isSeekable()) || rewind(this->stream) === false {
            throw new RuntimeException("Could not rewind stream");
        }
    }
    
    /**
     * Read data from the stream.
     *
     * @param int $length Read up to $length bytes from the object and return
     *     them. Fewer than $length bytes may be returned if underlying stream
     *     call returns fewer bytes.
     *
     * @return string Returns the data read from the stream, or an empty string
     *     if no bytes are available.
     *
     * @throws RuntimeException if an error occurs.
     */
    public function read(int length) -> string
    {
        var data;
    
        let data =  fread(this->stream, length);
        if !(this->isReadable()) || data === false {
            throw new RuntimeException("Could not read from stream");
        }
        return data;
    }
    
    /**
     * Write data to the stream.
     *
     * @param string $string The string that is to be written.
     *
     * @return int Returns the number of bytes written to the stream.
     *
     * @throws RuntimeException on failure.
     */
    public function write(string stringg) -> int
    {
        var written;
    
        let written =  fwrite(this->stream, stringg);
        if !(this->isWritable()) || written === false {
            throw new RuntimeException("Could not write to stream");
        }
        // reset size so that it will be recalculated on next call to getSize()
        let this->size =  null;
        return written;
    }
    
    /**
     * Returns the remaining contents in a string
     *
     * @return string
     *
     * @throws RuntimeException if unable to read or an error occurs while
     *     reading.
     */
    public function getContents() -> string
    {
        var contents;
    
        let contents =  stream_get_contents(this->stream);
        if !(this->isReadable()) || contents === false {
            throw new RuntimeException("Could not get contents of stream");
        }
        return contents;
    }

}