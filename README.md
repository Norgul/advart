# Advart
## Laravel - Artisan "make" command upgrade

### Introduction

I have made this command as a helper command for Laravels Artisan `make` command. The idea behind it was that if you follow laravel
naming convention that you don't need to specify what exactly are you making. I was aiming for additional simplicity like Laravel creators
always improve their code, so I wanted to bring in my part on the table.

So for example if you type `artisan make MyNewController`, the app will automatically assume that you're making a controller, thus you
are able to omit `:controller` from `make` command.

App is in beginning stages of development.

### Installation

### Usage

You can call any (///NOT YET///) command by typing `artisan make {name} {--flag}` where `flag is optional` as in normal artisan commands.

### Example 1

`artisan make MyNewController` -> makes a new blank controller
`artisan make MyNewController --flag=r` makes a controller with `-r` || `--resource` option

This also means that you can pass in `--flag=resource` and it will work as well.

To simplify it a bit more, you can use a shorthand name for flag, so you can pass in `-f=r` and it will do the same thing.