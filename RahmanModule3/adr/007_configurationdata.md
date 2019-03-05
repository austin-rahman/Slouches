# Explanation of Configuration Data

# Status: accepted

# Context: 

A  simple explanation of the Configuration Data used in this app including:

1. Docker Files
2. Database Files
3. Docker-Compose YAML Files (Environmental)
4. User Configuration

# Decision:

* I have kept the original Dockerfiles in the application even though it is running Docker-Compose

The configuration data used in this application is relatively simple. The Dockerfiles are present for both
the database and the webserver. These configure the data to be able to run on the command line for the application. We also
have the various database files. This includes an HTML file that handles the format of the webpage on the webserver. 
This would be an example of the functional data of the application which allows the connection to the web. Also,
we have multiple php files. These are the files that are creating and linking the database and the CRUD operators to
the webserver to allow the database to run. The docker-compose YAML file is the final piece that connects the containers
together and allows it all to run. All of these are connected to make the application run. 

There is not a very relevant presence of user configuration data in this application due to how simple the design is. It's
essentially just a database. Through the docker-compose file we set a password for the database which could be altered
depending on who is using the files. As far as volatility if a user received the GIT repos. they could change anything
including the root password.

# Consequences: 

Minimal effort is required to make the environment operational when using a docker-compose file. By using all of this
to configure our application we allow the application to run smoothly and be altered, stopped and ran very easily. 
This has many different advantages such as collaboration between colleagues or peers, etc. The configuration files
for this application are very simple but they are effective in making the application run.
