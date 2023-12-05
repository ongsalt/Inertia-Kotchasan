# Inertia-Kotchasan

## What is this
[Kotchasan](https://github.com/goragodwiriya/kotchasan) is a PHP Web Framework.

[Inertia](http://inertiajs.com) lets you quickly build modern single-page React, Vue and Svelte apps using classic server-side routing and controllers.

This is an Inertia adapter for Kotchasan.

### Notes
Kotchasan repository on packagist haven't been updated for long time now. You can download the latest directly from maintainer's github profile.  

## Setting up (for now)
Create a vite project. Please use vite config file from `example/` as a reference.

Then [set up inertia for client-side](https://inertiajs.com/client-side-setup). 

Vite will build everything in `resource/`(which is frontend-related file) and output it to `/js/inertia` that we need to serve it as static files (like everything else in `/js`).

## Usage
Just call `Inertia::render($pageName, $props)` in a controller. 

Please note that this will create new Response object and send it immediately instead of returning it like every other adapter(might be changed later).

### Example
Mostly copy from Kotchasan example.

```php
class Controller extends \Kotchasan\Controller
{
    public function execute(Request $request)
    {
        Inertia::render('Welcome', [
            'canLogin' => true,
            'canRegister' => true,
        ]);
    }
}
```

## What's working
- Sending page dynamicly

## What not
- Shared data
- Redirects
- Forms submission
- File upload
- Validation
- Lazy data evaluation
- Asset versioning
- Everything else

## Q&A

### Why?

because I can

### Is it stable?

Probably

### Should I use it?

why not