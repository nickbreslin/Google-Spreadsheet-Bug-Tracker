vendor/bin/phpdoc -d src/ -t docs_new
git checkout gh-pages
cp -r docs_new docs
git add docs/
git commit -m 'Documentation Sync'
git push origin gh-pages
git checkout master