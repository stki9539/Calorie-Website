
create table if not exists `protein` (
  `id` int(1) not null auto_increment,
  `name` varchar(40) not null,
  `qty` int(1) not null,
  `price` float not null,
  primary key (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=7;

insert into `protein` (`id`, `name`, `100g`, `calories`) values  
  (1, 'chicken', 1, 239),
  (2, 'beef', 1, 213),
  (3, 'lamb', 1, 294),
  (4, 'tuna', 1, 184),
  (5, 'salmon', 1, 208),
  (6, 'pork', 1, 242),
  (7, 'buffalo', 1, 99),
  (8, 'turkey' , 1, 135);

create table if not exists `grains` (
  `id` int(1) not null auto_increment,
  `name` varchar(40) not null,
  `qty` int(1) not null,
  `price` float not null,
  primary key (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=7;

insert into `grains` (`id`, `name`, `100g`, `calories`) values   
  (1, 'rice', 1, 130),
  (2, 'corn', 1, 365),
  (3, 'oat', 1, 389),
  (4, 'brown rice', 1, 166),
  (5, 'wheat', 1, 339),
  (6, 'flake', 1, 369),
  (7, 'cereal', 1, 333),
  (8, 'millet' , 1, 378);

create table if not exists `fruits` (
  `id` int(1) not null auto_increment,
  `name` varchar(40) not null,
  `qty` int(1) not null,
  `price` float not null,
  primary key (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=7;

insert into `fruits` (`id`, `name`, `100g`, `calories`) values 
  (1, 'avocado', 1, 160),
  (2, 'banana', 1, 80),
  (3, 'cherry', 1, 50),
  (4, 'grape', 1, 67),
  (5, 'mango', 1, 60),
  (6, 'peach', 1, 39),
  (7, 'watermelon', 1, 30),
  (8, 'apple' , 1, 52);

create table if not exists `vegetables` (
  `id` int(1) not null auto_increment,
  `name` varchar(40) not null,
  `qty` int(1) not null,
  `price` float not null,
  primary key (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=7;

insert into `vegetables` (`id`, `name`, `100g`, `calories`) values 
  (1, 'broccoli', 1, 34),
  (2, 'kale', 1, 49),
  (3, 'spinach', 1, 23),
  (4, 'tomato', 1, 18),
  (5, 'potato', 1, 77),
  (6, 'cucumber', 1, 16),
  (7, 'eggplant', 1, 25),
  (8, 'lettuce' , 1, 15);

