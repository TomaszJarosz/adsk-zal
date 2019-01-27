# adsk-zal
# SETUP
# start the ssh-agent in the background
eval $(ssh-agent -s)
ssh-add /home/ec2-user/environment/my_key.pem


# LAUNCH
ansible-playbook  -i /home/ec2-user/environment/adsk/projekt_zaliczeniowy/aws-secured-environment/hosts.ini /home/ec2-user/environment/adsk/projekt_zaliczeniowy/aws-secured-environment/install-hello-rest-service/hello-rest-service.yml
ansible-playbook  -i /home/ec2-user/environment/adsk/projekt_zaliczeniowy/aws-secured-environment/hosts.ini /home/ec2-user/environment/adsk/projekt_zaliczeniowy/aws-secured-environment/nginx/nginx.yml

# ssh:
ssh ec2-user@18.196.159.199 -i /home/ec2-user/environment/my_key.pem

ssh-keygen -R 18.196.159.199
