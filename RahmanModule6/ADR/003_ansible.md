# Choice of Provisioning Tool Used

# Status: accepted

# Context: 

An example of Provisioning Tool used for 459 module 6 assignment and explanation of:

1. Ansible
2. Why it's used
3. Advantages


# Decision:

We chose to use Ansible as the provisioning tool for this environment. The goal here is to 
switch from the DockerCompose YAML file to the Ansible playbook which allows more freedom
and operation on the business logic layer. 


# Consequences: 

Ansible works well for provisioning in this assignment with the use of the Playbook. This allows
the configuration of multiple servers by the using of the Playbook YAML files. These are
fairly simple in design and easy to understand. Ansible allows for configuration managment,
application development, and application deployment as the main function that we use it for here.
It was a great alternative to the DockerCompose file to pair with the Docker containers
and create a system that connects all the different containers. 