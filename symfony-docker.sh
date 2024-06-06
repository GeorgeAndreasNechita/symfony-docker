#!/bin/bash

# Define a function to run commands inside the PHP container
dcp() {
    docker-compose exec php "$@"
}

# Other functions or commands...