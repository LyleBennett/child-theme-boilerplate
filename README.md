
# Child Theme Boilerplate

My boilerplate solution do developing a flexible WordPress child theme leveraging GeneratePress as a parent theme. Recommended for developing locally, then uploading the built files.


## Installation

Clone this repo into the themes folder of your WordPress install.

Make sure you have a parent theme as well (this is child theme of GeneratePress)

Make sure you have Node.js installed on your local machine and run the following commands.
```bash
  cd /your/local/clone/of/this/project
  npm install
  npm install --global gulp-cli
```

## Run Locally

Make sure you have a parent theme as well (this is child theme of GeneratePress)

Clone the project into the themes folder of your WordPress install.

```bash
  git clone https://github.com/LyleBennett/child-theme-boilerplate.git
```

Go to the project directory

```bash
  cd child-theme-boilerplate
```

Install dependencies

```bash
  npm install
  npm install --global gulp-cli
```

Start the compiler

```bash
  gulp
```


## Features

- Can use scss which is compiled into style.css and editor-styles.css
- The theme js is also minified, could even create multiple js files which will be concatenated and minified into 1 js file which is enqued and localized for wp-ajax requests.
- Works with GeneratePress (my personal favourite theme at the moment)
