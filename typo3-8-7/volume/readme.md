##docker-compose

#erst html ordner mit unterordnern erstellen

#danach im docker-compose.yml mounten (volumes)

#image lokal verwenden

 build:
   ..usw.

# images aus dockerhub holen da build nicht klappt
  db: mysql:latest


WICHTIG:

 depends_on: 
   - database 

einfügen, da sonst die ipaddressen der container vertauscht werden

Bsp: 

docker-compose up  (database-container hat ip: 172.20.0.2, typo3 172.20.0.3)
docker-compose stop
docker-compose start (database-container hat ip: 172.20.0.3, typo3 172.20.0.2)

folge: error da kein db zugriff (da ip vertauscht wurde)

# jedes image in ordner packen
# und in docker-compose.yml mit build ansetzen

#typo3 installation:  

vorher lokalen ordnern lese und schreibrechte für alle geben:
(Nicht gut, muss man anders machen sicherheitstechnisch)

sudo chmod -R 777 html


BESSER:
 
        1. Gruppe web wurde erstellt auf dem host (beer,www-data)
        2. eigentümer des ganzen html ordners auf ww-data ändern:
	   sudo chown -c -R www-data html
        3. Im install-tool rumprobieren, und rechte entsprechend setzen: hier: eigentümer alles (7), gruppe: alles (7), andere nur lesen(5) 
          sudo chmod -R 775 html


(evt. rechte nochmal setzen, nachdem typo3 seine eigenen ordner mit rechten angelegt hatte- für ordner die man auch selbst bearbeiten möchte, hier ist es noch unklar)


#aufruf im browser:


url-ip aufruf: aus docker-compose.yml (hier: 127.0.1.1)
               oder typo3 container via docker inspect <container typo3> | grep IPAddress

 


dbconfig: ipadresse aus folgendem container nehmen:   

          docker inspect <database-container-name oder id> | grep IPAddress       

nutzer:   aus docker-compose.yml auslesen: -> enviroment: MYSQL_USER -> (hier typo3)
passwort: "       "     "          "     :  "  "               _PASSWORD -> (hier: password)


#nach dem arbeiten:

1. container stoppen
docker-compose stop 

2. container starten (bleiben erhalten)
docker-compose start


