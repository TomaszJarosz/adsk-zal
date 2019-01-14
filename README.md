# adsk-zal
SETUP
# start the ssh-agent in the background
'eval $(ssh-agent -s)'
Agent pid 59566

'ssh-add /******/id_student'
'st....1'

LAUNCH
ansible-playbook  -i ../hosts.ini setup.yml

