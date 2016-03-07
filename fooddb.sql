
create table if not exists `protein` (
  `id` int(1) not null auto_increment,
  `name` varchar(40) not null,
  `qty` int(1) not null,
  `price` float not null,
  primary key (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=7;

insert into `protein` (`id`, `name`, `100g`, `calories`) values          'grains fruits vegetables protein diary fats oils sweets'
  (1, 'chicken', 1, 239),
  (2, 'beef', 1, 213),
  (3, 'lamb', 1, 294),
  (6, 'tuna', 1, 184),
  (5, 'salmon', 1, 208),
  (6, 'pork', 1, 242),
  (7, 'buffalo', 1, 99),
  (8, 'turkey' , 1, 135);

