#lanceur radio car system(),shell_exec(),exec() func en php bug avec le bash en brut 

import os
import sys
from os import system as shell
from sys import argv

def main(musique=argv[1],frequence=argv[2]):
  command = "sudo sox -t mp3 /home/pi/fm_transmitter/musiques/%s -t wav - | sudo /home/pi/fm_transmitter/fm_transmitter -f %s -r -"%(musique,frequence)
  shell(command)
if __name__=="__main__":
  main()
