clear
echo ""
echo ""
echo ""
echo "			██████╗  █████╗ ██████╗ ██╗ ██████╗     ██████╗ ███████╗████████╗"
echo "			██╔══██╗██╔══██╗██╔══██╗██║██╔═══██╗    ██╔══██╗╚══███╔╝╚══██╔══╝"
echo "			██████╔╝███████║██║  ██║██║██║   ██║    ██████╔╝  ███╔╝    ██║   "
echo "			██╔══██╗██╔══██║██║  ██║██║██║   ██║    ██╔══██╗ ███╔╝     ██║   "
echo "			██║  ██║██║  ██║██████╔╝██║╚██████╔╝    ██████╔╝███████╗   ██║  " 
echo "			╚═╝  ╚═╝╚═╝  ╚═╝╚═════╝ ╚═╝ ╚═════╝     ╚═════╝ ╚══════╝   ╚═╝ "
echo "							       Installation"
echo ""

sudo apt-get update
sudo apt-get install git
sudo git clone https://github.com/markondej/fm_transmitter
cd fm_transmitter
sudo apt-get install make gcc g++
make
echo ""
echo " Installation Fini"
