# railway-portal
Sample Code Project to demonstrate online portal for rail ticket booking

Railway Reservation Portal
Page 3
Abstract :
The project aims to provide an alternative for the online Railway
Ticket booking system. The project can be modified to meet simple
needs for BITS or can be extended for the purpose of any
reservation system.
Furthermore this can be used to study the trends of ticket booking
systems, or for those pertaining to finance.
Railway Reservation Portal
Page 4
Strong Entities :
a)PROFILE
It contains the personal detail of every user.
· Name : User Name
· Password : User Password
· P_Type : Profile Type (Entered by the system)
· Username (PK) : Username
b)ADMIN
It contains the data of the administrative department of railway
system
· Designation : Post of the Staff personel
· {Admin_type} : Multivalued Admin type
c) USER
It has the account details of the non-officials of the railway
department
· Address : Adress of the user
· Age : Age of the user
· Email_ID : Email Id of the user
d)TRAIN_BOOK
It enables the user to book the train and see the various available
options between a pair of stations
· Train_Num (PK,FK1) : Number of the train
· Distance (PK,FK1,FK2) : distance between source and
destination
· Train_Name : Name of the Train
· Destination : Destination of the passenger
· Dest_Arrival_time : Arrival time at the destination
Railway Reservation Portal
Page 5
· Source : Source of the Passenger
· Source_Dep_time : Departure time at the source station
· Source_Arr_time : Arrival time at the source station
· Fare : Fare the the travel
e)BANK
It saves all the transaction detail for every user.
· PNR (PK) : PNR number of the ticket
· Transaction_ID : Amount transaction ID for a specific
travel/ticket
· Transaction_time : Time of monetary transaction
· Bank_Name : Name of the Bank through which transaction is
done
· Account : Account Number
f) TICKET
It stores the data of all the ticket buying and cancellation of
passengers
· PNR (PK) : PNR Of the Ticket
· Train_Num (PK, FK2) : Train Number
· Distance (PK, FK2) : Distance between a Pair of Stations
· ID : Priority Number of a ticket
· Source : Boarding point of a passenger
· Destination : Destination point of a passenger
· Fare : Cost of the ticket
· Class : Class of Travel
· Date_Of_Journey : Date of Journey
· Date_Of_Book : Date on which ticket was booked
· Seat_Num : Seat number in the train
· Name : Name of the person
· Age : Age of the person
· Status : Status of Booking
Railway Reservation Portal
Page 6
g)PRICE
· Distance (PK) : Distance between a pair(Source/Destination)
of station
· Base_Fare : Base Fare for a particular distance.
· Cess : Rebate on certain travels
· Tax : Tax payed for travel
· Multiply_factor : A factor for varying base price for different
class and types
· Class : Class of travel
· [Fare] : Cost of travel : Derived attribute
· Type : Type of Train eg. Express, Local, Superfast, Rajdhani
etc…
h)TRAIN_DETAIL
· Train_num (PK) : Train Number
· Seat (PK) : Seat of passenger for travelling
· Distance (PK, FK1) : Distance of travel
· Train_Name : Name of the train
· Class : Class of the travel
· Route_Num : Number of the route followed
· Time : Time of travel
· Station : Station
· Type : type of train eg. Local ,Superfast etc…
i) ROUTE
· Route_Num : The ID of the particular route
· Station : Stations which come on in that route
· Source_Dist : Distance of the each station from the source
· [Distance] : Derived attribute between to given stations.
Key:
Railway Reservation Portal
Page 7
PK : Primary Key
FK : Foreign Key
The dotted line represents non-identifying relationship
The solid line represents Identifying relationship
Associative Entity :
Operates:
It stores the operation details performed by an admin on tickets. For tickets the corresponding admin is directed to
cancel the ticket if an only if the train is cancelled for that day. The corresponding amounts will be refunded.
· Cancel_Date : Stores the Date of which the ticket is being
cancelled.
· Refund_Status : Keeps a record of the refund status
· Booking_Date : Stores the date of booking
Railway Reservation Portal
Page 8
Working of the Reservation Portal:
A user can book his ticket if he has his profile. There are two category of users
(a) Staff (b) Normal Users. Users have to input there source, Destination, class
and date of journey. An entity train Detail contains detail of every train and
their halts. There are standard routes prescribed by the railway. The entity
route contains the route stations for each route. There are different types of
trains and different classes in each trains. The cost of travel of each passenger
is calculated by a different entity Cost. From these entities, the user gets all the
available options of trains. He can check seat availability and his booked
history . If he wishes to book a ticket, he can do so by simply going at the
booking section. The request is then send to a bank to handle to requested
fund transfers. If the transfer is successful, then only, the ticket is finalized and
the PNR is added to the record. If not, the booking terminates.
The passenger also has the option to cancel his ticket. He can check his booked
history and select a ticket to cancel. Upon validating the ticket, if ticket
appears to be true funds will be transferred to the given A/C. A separate ‘ID’ is
also assigned to each ticket, apart from PNR. This ‘ID’ acts as a priority
number and keeps a record for waiting passengers. The number of passengers
in waiting can be seen from status attribute.
