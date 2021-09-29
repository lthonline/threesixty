# Three Sixty Wordpress Theme
Wordpress theme created for private use 

**Project Requirement**

Node Package Manager version > 6.9.0

**How to install theme**

1. Download zip and extract into wp-content\theme folder
2. Rename folder to "threesixty"
3. Activate theme from wordpress theme settings
4. Now Theme is ready to use

**How to update theme**

Download required packages using Node Package Manager (npm)

1. Open threesixty/assets folder in cmd or powershell
2. Run command "npm install"
3. Packages will download under node_modules
4. Now make require changes in threesixty/src files
5. Build project using command "npm run dev" for developement or "npm run prod" for production
6. This will create new folder name as "build" and this is used as theme source files (css, js, images etc)
