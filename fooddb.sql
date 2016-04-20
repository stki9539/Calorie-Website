
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
  (5, 'orange', 1, 45),
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
  
  create table if not exists `sweets` (
  `id` int(1) not null auto_increment,
  `name` varchar(40) not null,
  `qty` int(1) not null,
  `price` float not null,
  primary key (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=7;

insert into `sweets` (`id`, `name`, `100g`, `calories`) values 
  (1, 'chocolate chips cookies', 1, 488),
  (2, 'glaze donut', 1, 260),
  (3, 'chocolate donut', 1, 195),
  (4, 'chocolate cake', 1, 371),
  (5, 'vanilla ice cream', 1, 207),
  (6, 'chocolate ice cream', 1, 216),
  (7, 'cheesecake', 1, 321),
  (8, 'sugar cookies' , 1, 436);
  
  create table if not exists `dairies` (
  `id` int(1) not null auto_increment,
  `name` varchar(40) not null,
  `qty` int(1) not null,
  `price` float not null,
  primary key (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=7;

insert into `dairies` (`id`, `name`, `1 cup`, `calories`) values 
  (1, 'Whole Milk', 1, 146),
  (2, 'Cream light whipping', 1, 350),
  (3, 'Cream heavy whipping', 1, 414),
  (4, 'Cottage Cheese', 1, 163),
  (5, 'Cheese Cheddar', 1, 113),
  (6, 'Cheese Colby', 1, 110),
  (7, 'Fruit yoghurt', 1, 126),
  (8, 'Sour cream' , 1, 206);

  create table if not exists `fats & oils` (
  `id` int(1) not null auto_increment,
  `name` varchar(40) not null,
  `qty` int(1) not null,
  `price` float not null,
  primary key (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=7;

insert into `fats & oils` (`id`, `name`, `1 tbsp`, `calories`) values 
  (1, 'butter', 1, 102),
  (2, 'canola oil', 1, 124),
  (3, 'coconut oil', 1, 117),
  (4, 'lard', 1, 115),
  (5, 'margarine', 1, 34),
  (6, 'palm oil', 1, 120),
  (7, 'olive oil', 1, 119),
  (8, 'vegetable oil' , 1, 124);
  
