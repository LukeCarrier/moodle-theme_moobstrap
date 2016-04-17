# Moobstrap

Bootstrap base theme for Moodle.

* * *

## This is broken

I'd call it a "work in progress", but that implies that some small part of it
works. Don't install it and use it on your live sites, because you probably
won't be able to navigate to the theme selector to disable it again.

## Installation

1. Drop these files into `/theme/moobstrap`.
2. Execute the Moodle upgrades.
3. Navigate to the Appearance -> Theme selector and enable it.

## FAQ

### But we don't need yet another Bootstrap base theme...

Sure. But none of the Bootstrap base themes that are out there at the moment are
doing all of the following:

* Using Bootstrap v4's SASS as the developers intended. Moodle's LESS compiler
  has some horrendous performance shortcomings, and assets shouldn't be built in
  production.
* Tackling Moodle's horrendous markup head on by overriding absolutely
  everything, including the things that aren't supposed to be overriden.
  Frontend developers shouldn't be expected to deal with terrible markup because
  of the inane/idiosyncratic thinking of backend developers. It's time to stop
  writing 12 line CSS selectors and focus on engineering better user experiences
  for our end users.
* Using Bootstrap's own JS, as the developers intended, instead of a watered
  down reimplementation atop a dying JavaScript framework.

If it helps you sleep at night, think of this as my folly.

### But Moodle HQ have committed to Bootstrap 4 anyway

Right, and didn't they do an incredible job with Bootstrap 2? At least 5% of
core outputs sane, Bootstrap markup instead of inventing 25 ways to do something
completely incorrectly, right?

### You're a cynical git, aren't you?

;-)
