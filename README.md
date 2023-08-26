##laravelfinals (Emro's Boarding House)

link: laravelfinals.local


Instructions to run the project:
> open virtual post by going to C:\xampp\apache\conf\extra
> open vhost.conf (you can open it with Visual Studio Code or VSC)
> add the following code in the very bottom:

<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs"
    ServerName localhost
</VirtualHost>

<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/laravelfinals/public"
    ServerName laravelfinals.local
</VirtualHost>

> then save it
> next, open notepad (run as admin)
> go to C:\Windows\System32\drivers\etc
> change format to "All files(".")
> open hosts
> add the following code to the bottom:

127.0.0.1 localhost
127.0.0.1 laravelfinals.local

> save
> open xampp control panel and restart Apache
> open VSC then open the laravelfinals folder
> let us set up the database by first going to the .env
> set the DB_DATABASE into "laravelfinals"
> set the DB_USERAME into "<your db username>"
> set the DB_PASSWORD into "<your db password>"
> and save it
> next, open your preferred browser (I recommend Microsoft Edge)
> type in the address bar ("localhost/phpmyadmin") (discard the "") and enter
> import the laravelfinals database
> open bash terminal inside the VSC and type 

npm run dev

> and press enter
> then open your preferred browser (I recommend Microsoft Edge)
> type in the address bar (laravelfinals.local) and enter it
> First you will need to login to gain access interaction to the project, and if you are new, you can freely register by pressing the register button at either in the nav bar or in the middle of the page
> after registering, you will proceed to the dashboard, where you can edit/delete a boarder but we cannot view it, we can just identify who created the boarder (we will not touch anything in the dashboard)
> we will proceed to the boarders by clicking the "boarders" button in the middle of the navbar, the boarder interface is where we can create/add, update , view, and delete. There is also a bills, and room button.
> we can proceed to the bills button where the Room, Month of Bill and status of the boarder will be displayed, we can also add, update and delete a bill. To view more details about the payments, you can click the "details" button to view more about the bills of the boarder/s.
> we can proceed to the "Room" button where we can view the details, information and status of each room, whether it could be available, occupied or under maintenance.
> [optional] We can check the "about" button. It is the information made by the creator and sole developer of the project.
> After using the project, we will just kindly logout out of the project by going to "Your Name" or where the "login" & "Register" button was placed on the navbar, and press logout.
>
> 
>
> Thank you for using the Emro's Boarding House Laravel Web Application!
>
> (Message from the developer :
>  "The project is not perfect, the front-end is a little messy but readable, but its always not all about the appearance right? I mostly prioritized the project's back-end functionality, so it works. This project is also not easy to work on when you do not have any group or person to rely on. Yes, I only did this solo, it was hard and I made a lot of mistakes, lost motivation and somewhat despise doing back-end because that is where most error appears but finishing the "beta" version of this project and I can proudly say I did love coding [both front-end and back-end but mostly back-end now] and understand more about back-end programming and LARAVEL <3 Thank you!.
                                                                                        -Liberty Vasquez (BSIT student)
> ) 



