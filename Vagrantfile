Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/bionic64"

  config.vm.network "forwarded_port", guest: 8081, host: 8081
  config.vm.network "forwarded_port", guest: 5601, host: 5601

  config.vm.provider "virtualbox"

  config.vm.provider "virtualbox" do |v|
    v.memory = 4092
    v.cpus = 6
  end

  config.vm.provision "shell", inline: <<-SHELL
    apt-get update
    apt-get install -y ansible
    ansible-playbook -i /vagrant/provisioning/hosts -l vm /vagrant/provisioning/playbook.yml
  SHELL
end
