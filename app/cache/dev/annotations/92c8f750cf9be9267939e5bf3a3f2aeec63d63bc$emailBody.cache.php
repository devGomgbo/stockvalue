<?php return unserialize('a:3:{i:0;O:29:"Doctrine\\ORM\\Mapping\\OneToOne":6:{s:12:"targetEntity";s:39:"Oro\\Bundle\\EmailBundle\\Entity\\EmailBody";s:8:"mappedBy";N;s:10:"inversedBy";s:5:"email";s:7:"cascade";a:1:{i:0;s:7:"persist";}s:5:"fetch";s:4:"LAZY";s:13:"orphanRemoval";b:0;}i:1;O:31:"Doctrine\\ORM\\Mapping\\JoinColumn":7:{s:4:"name";s:13:"email_body_id";s:20:"referencedColumnName";s:2:"id";s:6:"unique";b:0;s:8:"nullable";b:1;s:8:"onDelete";s:8:"SET NULL";s:16:"columnDefinition";N;s:9:"fieldName";N;}i:2;O:33:"JMS\\Serializer\\Annotation\\Exclude":0:{}}');