# Ubuntu Bionic dev machine

This virtual machine can be created on a windows host.
It is used for application development with docker.

On your windows machine (the host), you need to have the latest versions of the
following programs installed :
- [vagrant (64bits)](https://www.vagrantup.com/downloads.html)
- [virtualbox](https://www.virtualbox.org/wiki/Downloads)

Then :
- clone this repository
- open a console (`cmd`)
- go to the directory where you cloned this repository (using `cd`)
- add the ubuntu box : `vagrant box add ubuntu/bionic64`
- start the machine : `vagrant up`
- log into the machine `vagrant ssh`

# Symfony application with CI and EFK (Elasticsearch + Fluentd + Kibana)

- To run the stack sf-prject (symfony-php-mysql-nginx) : `cd /vagrant/sf-project && make start`
- To run the stack docker-monitoring (Elasticsearch-Fluentd-Kibana) : `cd /vagrant/docker-monitoring && make start`

- To stop the stack sf-prject (symfony-php-mysql-nginx) : `cd /vagrant/sf-project && make stop`
- To stop the stack docker-monitoring (Elasticsearch-Fluentd-Kibana) : `cd /vagrant/docker-monitoring && make stop`
