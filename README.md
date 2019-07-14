# adsk-zal
# SETUP
# start the ssh-agent in the background
-eval $(ssh-agent -s) 
-ssh-add /home/ec2-user/environment/my_key.pem


# LAUNCH
ansible-playbook  -i /home/ec2-user/environment/adsk/projekt_zaliczeniowy/aws-secured-environment/hosts.ini /home/ec2-user/environment/adsk/projekt_zaliczeniowy/aws-secured-environment/install-secured-environment.yml

# ssh:
ssh ec2-user@{ip_address} -i /home/ec2-user/environment/my_key.pem

ssh-keygen -R {ip_address}
