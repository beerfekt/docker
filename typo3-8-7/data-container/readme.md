##docker-compose

# images aus dockerhub holen
  db: mysql:latest
  typo3: martinhelmich/typo3:8.7

# jedes image in ordner packen
# und in docker-compose.yml mit build ansetzen

#typo3 installation:  

url-ip aufruf: aus docker-compose.yml (hier: 127.0.1.1)

 
dbconfig: ipadresse aus folgendem container nehmen:   

          docker inspect <database-container-name oder id> | grep IPAddress       

nutzer:   aus docker-compose.yml auslesen: -> enviroment: MYSQL_USER -> (hier typo3)
passwort: "       "     "          "     :  "  "               _PASSWORD -> (hier: password)
