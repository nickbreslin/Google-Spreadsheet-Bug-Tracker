rm -rf docs/
vendor/bin/phpdoc -d src/ -t docs
git checkout gh-pages
git add docs/
git commit -m 'Documentation Sync'
git push origin gh-pages
git checkout master