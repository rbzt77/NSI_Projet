<img src="https://e7.pngegg.com/pngimages/653/121/png-clipart-preventive-maintenance-company-service-reliability-centered-maintenance-others-miscellaneous-text.png" height="300" width="400">

*Ne pas oublier les configurations utilisateurs avec l'user www-data, pas de bras pas de chocolats :D*<br>
`shell~: sudo chown -R www-data:www-data /var/www/html/`<br>
<br>*Ajouter l'utilsateur www-data avec les droits root ( à ne pas faire , mais c'est pour le projet [accès au /dev/mem pour le GPIO PIN 4 (Antenne)] )*<br>
`shell~: sudo nano /etc/sudoers` 
<br>    -> `www-data ALL=(ALL) NOPASSWD:ALL`

<br>*Puis on reboot*<br>`shell~: reboot`
