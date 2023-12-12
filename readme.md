# Inertia-Kotchasan

## What is this
[Kotchasan](https://github.com/goragodwiriya/kotchasan) is a PHP Web Framework.

[Inertia](http://inertiajs.com) lets you quickly build modern single-page React, Vue and Svelte apps using classic server-side routing and controllers.

This is an Inertia adapter for Kotchasan.

### Notes
Kotchasan repository on packagist haven't been updated for long time now. You can download the latest directly from maintainer's github profile. 

## Setting up
I assumed you already have a Kotchasan project. You also (obviously) need node installed as well.

Install vite and all the frontend stuff. Please use look at vite config file from `example/` as a reference.

Then set `build.rollupOptions.input` to the js entry point. Don't forget to change `base`, `build.outDir` and `build.outDir`. We need to serve it(dist) as static files.

Then create adapter config file at settings/inertia.php using the same config as vite
```php
return [
    // All frontend related stuff go in here. It will be built using Vite
    'resourcePath' => '/resources',

    // This is where you serve all static content. Beware of vite base path. 
    'distPath' => '/assets',
];
```

You can now [set up inertia for client-side](https://inertiajs.com/client-side-setup). 

| Setup script may or may not be created.

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

## Todo 
- read config from /settings/inertia.php


## Q&A

### Why?

because I can

### Is it stable?

Probably

### Should I use it?

why not