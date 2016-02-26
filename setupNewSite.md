1. run ansible script to create the site
    cd ~/vagrant-lamp/
    ansible-playbook ansible/playbooks/vagrant/site/static.yml

2. name the site
    simon.dev

3. update our hosts file
    subl /etc/hosts

4. initialize the simon.dev as a git repo
    cd ~/vagrant-lamp/sites/simon.dev/
    git init

5. make a new remote repo on github
6. push our code up
