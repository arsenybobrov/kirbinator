## install frontend dev
cd src

npm install

src > gulpfile.js >> update vendor

gulp vendor

## install kirby dev
customize kirby GUI

cd dist/panel

npm install

## run frontend dev
src > gulpfile.js >> replace proxy: "http://localhost:8888/path-to-kirbinator/dist"

start local php server (e.g. MAMMP)

cd src

gulp dev

enable debug mode: dist > site > config > config.php >> c::set('debug', true);

## run kirby dev
cd dist/panel

gulp

## build
cd src

gulp

disable debug mode: dist > site > config > config.php >> c::set('debug', false);

## backend editor templates
dist > site > blueprints

## set startpage
dist > site > config > config.php

## publish
upload dist directory

## acces backend
yourserver.com/panel

## uploaded images
dist > content

## plugins
SHRINK IMAGES: dist > site > plugins > image-shrink.php

## kirby cms
Please note that kirby is not free to use.

Licence: https://getkirby.com/buy

Cheatsheet: https://getkirby.com/docs/cheatsheet

