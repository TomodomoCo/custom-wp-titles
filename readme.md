# Custom WP Titles

A simple, quick, and dirty mu-plugin for building page titles in WordPress. Inspired by the easy setup of "SEO-friendly" titles in Yoast's SEO plugin, but aimed at people who want more customisation and don't need the extra plugin bloat.

Simply set your title tag to...

```php
<title><?php wp_title(''); ?></title>
```

...and [add this as an mu-plugin](http://codex.wordpress.org/Must_Use_Plugins). Boom.

**NOTE:** This will probably work out of the box for most use cases, but you should feel free to customise it to your heart's content. Set your own separator, add other conditions, make it suck less, etc.

## License

This is free and unencumbered software released into the public domain.

Anyone is free to copy, modify, publish, use, compile, sell, or
distribute this software, either in source code form or as a compiled
binary, for any purpose, commercial or non-commercial, and by any
means.

In jurisdictions that recognize copyright laws, the author or authors
of this software dedicate any and all copyright interest in the
software to the public domain. We make this dedication for the benefit
of the public at large and to the detriment of our heirs and
successors. We intend this dedication to be an overt act of
relinquishment in perpetuity of all present and future rights to this
software under copyright law.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS BE LIABLE FOR ANY CLAIM, DAMAGES OR
OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.

For more information, please refer to <http://unlicense.org/>
