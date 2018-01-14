# Docker LEMP
#### A minimal docker structure for running NGINX, PHP (with PDO) and MySQL

## How to Use
 - Download the repository
 - Create a `.env` file by copying `.env.example` and set the database credentials
 - `$ bin/docker-up`
 - Open [http://localhost](http://localhost) in your browser (you may have to wait a few seconds for the mysql container to ready up)
 - Edit the contents of the `src/public/` folder with your website
