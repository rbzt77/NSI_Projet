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

apt-get update
apt-get install git
git clone https://github.com/markondej/fm_transmitter
cd fm_transmitter
apt-get install make gcc g++
make
echo ""
echo " Installation Fini"
