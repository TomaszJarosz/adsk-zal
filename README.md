# adsk-zal
SETUP
# start the ssh-agent in the background
'eval $(ssh-agent -s)'
Agent pid 59566

'ssh-add ../../id_student'
'st....1'

LAUNCH
ansible-playbook  -i ../hosts.ini setup.yml

ssh:
ssh ec2-user@3.121.22.77 -i id_student
