@extends('template')

@section('content')
<section class="container mentions-legales" >
    <img class="logo" src="{{ asset('images/logo.svg') }}" alt="">
    <h1>Mentions Légales <span class="ml-3"><a href="{{ route('brambily.index') }}" class=""><i class="fas fa-arrow-left pr-2"></i>Accueil</a></span></h1>
    
    <article>
        <h2>Editeur du site Internet</h2>
            <p>Le Brambily</p>
            <p>Mauron 56430</p>
            <p>Téléphone : 02 30 19 01 41</p>
        <h2>Hébergement du site Internet</h2>
            <p>
                o2switch
                Siret : 510 909 807 00024
                RCS Clermont Ferrand
                SARL au capital de 100 000€
                
                Opérateur Télécom déclaré ARCEP
                09/2989 - AS50474
                
                o2switch est une société du groupe Zohey
                SAS au capital de 8 000 000€
                
                Marque déposée INPI : 09 3 645 279
                L'ensemble des éléments visuels et textuels de ce site
                fait l'objet d'un dépôt INPI-Soleau
            </p>
        <h2>Crédits</h2>
            <p>
                Responsable éditorial : Le Brambily<br>
                Technologies utilisées : Laravel<br>
                Conception et réalisation du site : Luis Zuniga, Jérémy Brohan, Grégorie Vexier, Simon Givry<br>
            </p>
        <h2>Propriété et reproduction</h2>
            <p>
                La structure générale, ainsi que les logiciels, textes, images animées ou fixes, sons, savoir-faire, dessins, graphismes et tous autres éléments composant ce site web sont de l’utilisation exclusive du Brambily.
                Toute reproduction totale ou partielle de ce site, par quelques procédés que ce soient, sans autorisation expresse du Brambily, est interdite et constituerait une contrefaçon sanctionnée par les articles L335-2 et suivants du Code de la propriété intellectuelle.
                Les liens hypertextes mis en place dans le cadre du présent site web en direction d’autres ressources présentes sur le réseau internet, ne sauraient engager la responsabilité du Brambily.
            </p>
        <h2>Données personnelles</h2>
            <p>
                Aucune information personnelle n’est collectée à votre insu ni cédée à des tiers. 
                Vous disposez d’un droit d’accès, de rectification et d’opposition aux données vous concernant que vous pouvez exercer en envoyant un courrier électronique au Brambily.
            </p>
        <h2>Liens</h2>
            <p>
                Le Brambily autorise la mise en place d’un lien hypertexte pointant vers son contenu, en respectant les principes suivants :

                Le lien pointant vers le site Le Brambily soit accessible par l’ouverture d’une nouvelle fenêtre/onglet.
                Le lien est présenté de la manière suivante : brambily.overflow-hidden.fr
                Cette autorisation exclut l’utilisation du logo brambily.overflow-hidden.fr
            </p>
        <h2>Loi applicable</h2>
            <p>L’usage de ce site web est régi par la loi française à l’exception de toute autre législation.</p>
    </article>
</section>
@endsection