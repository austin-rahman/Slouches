# Explanation of Docker-Compose YAML File

# Status: accepted

# Context: 

A  simple explanation of a docker-compose file that:

1. Links multiple Docker containers together
2. Can start and configure all the services


# Decision:

The application is now supporting docker-compose file. We are proposing using the file for a couple of reasons.
With Docker containers were are able to send and receive working systems easier and more efficiently. With the use of
a Docker-Compose YAML File.

# Consequences: 

Minimal effort is required to make the environment operational in this Docker-Compose format. It becomes
easier to run and shut down the environment. The containers run together and with the one YAML file
you are able to make changes to the containers, hosts, etc very efficiently. This basically makes
the whole process of using Docker faster and more easily accessable. 