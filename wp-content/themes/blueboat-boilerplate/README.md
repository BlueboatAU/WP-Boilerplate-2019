# A Wordpress Theme by Studio Blueboat

Requires codekit for sass and js processing

## After Setup
1. Find and replace 'Boilerplate' and 'boilerplate' to get started
2. run 'npm install' in the src/ directory
3. Initialise a git repository in this directory to back up your theme code using the following commands (be sure to replace the curly brackets with your git repo url):

```
git init
git add -A
git commit -m "first commit"
git remote add origin {{ insert GitHub url here }}
git branch -M main
git push -u origin main
```

## Ensure theme directory name and github repo have the same name
This will ensure github action deploy works correctly
