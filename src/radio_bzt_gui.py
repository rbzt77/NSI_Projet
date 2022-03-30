#Python2.7 & 3 

import os
import tkinter
import sys
import time
from tkinter import *
from os import system as shell
from time import sleep

#configuration de la page
root = Tk()
root.geometry("300x400")
root.title("RadioBZT")
root.configure(background="black")

background_image = PhotoImage(file="/img/rbzt.png")
background = Label(root,image=background_image,bd=0).pack()

label_title = Label(root,text="RadioBZT",bg="white",font=("Times New Roman",20)).place(x=95,y=20)

#verification des arguments STDIN
if len(sys.argv) < 2:
    print("Usage: python RadioBZT.py Frenquence Musique")
    sys.exit()

#configuration des logs & autres
location_fmtransmitter = "cd /home/pi/fm_transmitter"
ip_ssh = '172.20.10.3'
port = '22'
user_ssh = 'pi'
nom_musique = sys.argv[2]
PASS_SSH = 'raspberry'
frequence = float(sys.argv[1])

#page principale
liste = Listbox(root,bg="white",width="33",height="8")
liste.insert(1,"              -= RadioBZT Activée =-")
liste.insert(2,"")
liste.insert(3, "# Frequence: %s MHz"%(float(sys.argv[1])))
liste.insert(4, "# Onde Type: FM")
liste.insert(5, "# Musique  : %s"%(sys.argv[2]))

liste.place(x=18,y=85)

#création des différentes fonctions raccordées aux boutons
def main():
    print("[ * ] Generation de la Station FM...")
    sleep(0.5)
    payload = "sox -t mp3 /home/pi/fm_transmitter/musiques/%s -t wav - | ./fm_transmitter -f %s -r -" %(nom_musique,frequence)
    shell("sshpass -p '%s' ssh  -p %s %s@%s '%s && %s'"%(PASS_SSH,port,user_ssh,ip_ssh,location_fmtransmitter,payload))

def exit():
    root.destroy()

def stop():
    stop_song = "killall fm_transmitter"
    shell("sshpass -p '%s' ssh -p %s %s@%s '%s'"%(PASS_SSH,port,user_ssh,ip_ssh,stop_song))
    print("")
    print("[ * ] Musique Off !")
    sys.exit()

#création des boutons
button_stop = Button(root,text="Stop",command=stop).place(x=120,y=300)
button_song_generate_ssh = Button(root,text="Mise en route [SSH]",command=main).place(x=70,y=250)
button_exit = Button(root,text="Quitter",command=exit).place(x=120,y=360)

if __name__=="__main__":
    root.mainloop()
