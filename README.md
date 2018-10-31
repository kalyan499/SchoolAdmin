# SchoolAdmin
School Admin Template

Go to your folder and from there open command prompt
Step 1:* git clone "mention path from the github"
Step 2:* git status 
        just for status of the folder.. if you add or delete or modified pages will show one by one in command prompt
step 3: 
        if you want to add files in to github repositorty
        Step a1: git add .
        step a2: git commit -m "your current folder/files changes description"
        step a3: git push
        
---------------------------------------------------------------------------------------------

$ git init

$ git add .

  -Adds the files in the local repository and stages them for commit. To unstage a file, use 'git reset HEAD YOUR-FILE'.

$ git commit -m "First commit"

  -Commits the tracked changes and prepares them to be pushed to a remote repository. To remove this commit and modify the file, use 'git reset --soft HEAD~1' and commit and add the file again.
   
$  git push origin master
   -Pushes the changes in your local repository up to the remote repository you specified as the origin
