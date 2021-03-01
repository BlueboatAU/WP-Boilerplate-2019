# WP-Boilerplate-2019

## 1. install a new wordpress instance

```
wp core download
git init
git remote add origin https://github.com/BlueboatAU/WP-Boilerplate-2019.git
git fetch
git checkout -f -t origin/master
rm -rvf .git
rm -rvf .gitignore
rm -rvf README.md
```

## 2. complete theme setup
Details contained within themes Readme.md

## 3. create new git repo within theme directory
run in theme directory after setup

```
git remote set-url origin {{ new git url }}
```
