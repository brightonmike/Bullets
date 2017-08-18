[![Build Status](https://travis-ci.org/brightonmike/Bullets.svg?branch=master)](https://travis-ci.org/brightonmike/Bullets)

Bullets
=======

Bullets is a free WordPress skeleton theme. It contains just about enough Sass to get you started on your next project - but without being a highly comprehensive frame work such as Foundation or Bootstrap.

If you need a frame work with all the bells and whistles - Bullets is not the tool for you. There are no carousels, no complex variations to serve every possible need. Bullets does not come with much in the way of styling.

If you find yourself removing 80% of what comes with a frame work - give Bullets a try.

### Basic Docs

- Get started by tweaking the settings in settings.scss
- You can remove or add the mixins in the style.scss file to only include what you need.
- Bullets has a 12 column grid with column classes for mobile, tablet and desktop, with the breakpoints of these controllable seperate to your media queries (though using the mqs by default).

### Getting Started With Gulp
- Run `npm update --save-dev` to update package.json dependencies to the latest and download the latest node modules.
- Run `gulp` to confirm everything is working

### Contribute

If you want to contribute - feel free. All pull requests considered. However, the aim of Bullets is to be light weight and skinny, so feature requests will always bare this in mind.


### Sites built with Bullets

- http://www.pharmatsea.co.uk/ (Bullets version 1)
- http://formationfm.co.uk/

Grid
====

The Bullets grid is flexbox based, with browser support extended through Gulp.

### Mark-up

```
<div class="row">
  <div class="column column-m-12 column-t-6 columm-d-4">
  </div>
  <div class="column column-m-12 column-t-6 columm-d-4">
  </div>
  <div class="column column-m-12 column-t-6 columm-d-4">
  </div>  
</div>
```

Although the class names suggest "m" mobile, "t" tablet and "d" desktop, you should approach the use of the grid in a device agnostic manner.

### Constrain width

By default, Bullets is full width. Use the container class to constrain width.

```
<div class="container">
  <!-- grid -->
</div>
```

If you want to save mark-up, you can add it to the `row` element.

### Alignment

Use the row modifier classes to change alignment.

Horizontal:
```
.row--justified
.row--spaced
.row--end
.row--center
```

Vertical:
```
.row--middle
.row--bottom
.row--top
```
