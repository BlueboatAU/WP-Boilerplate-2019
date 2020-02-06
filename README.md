# WP-Boilerplate-2019

## to install a new wordpress instance

  wp core download
  git init
  git remote add origin https://github.com/studio-blueboat/WP-Boilerplate-2019.git
  git fetch
  git checkout -f -t origin/master
  rm -rvf .git
  rm -rvf .gitignore

  //if planning to backup
  git remote set-url origin {{ new git url }}
