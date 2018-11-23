CREATE TABLE  member (
	id char(12) not null PRIMARY KEY,
	pass  char(16) not null,
	name  char(10) not null,
	birthday char(10)  not null,
	gender char(1) not null,
	email char(20),
	hp char(11) not null,
	address char(70), 
	regist_day char(20),
	promo_ok char(1)
)DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;