create database Customer /* create a database */
create table Customer    /* creates a table in the database */
(
	FirstName varchar(50)
)
/* creates a column for the database. */

insert into dbo.Customer /* insert into table */
	(Firstname, LastName, Age)
	values ('Joey', 'BLue', 30);
	
	/*Highlight the specific data you want to add */
	
select * from Customer /* means select all columns from table */
where FirstName = 'John' /* to find specific data */
and LastName = 'Cer' /* and to find specific data */