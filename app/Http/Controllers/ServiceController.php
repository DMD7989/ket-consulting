<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    protected function services(): array
    {
        return [
            'telecommunications-reseaux' => [
                'label' => __('TÉLÉCOMMUNICATION ET RÉSEAUX'),
                'title' => __('Infrastructures, réseaux et datacenters'),
                'description' => __('Déploiement d’infrastructures IT, interconnexions réseau et environnements d’hébergement sécurisés, pour garantir performance, disponibilité et continuité des opérations.'),
                'body' => [
                    __('Nous concevons et déployons des infrastructures IT et des interconnexions réseau capables de soutenir les opérations les plus exigeantes. Études d’ingénierie, câblage, équipements actifs et supervision : chaque intervention vise une disponibilité et une continuité de service élevées, quel que soit le contexte opérationnel de l’organisation.'),
                    __('Cette expertise s’étend à l’hébergement : conception, déploiement et gestion d’infrastructures Datacenter sécurisées et performantes. Nous garantissons la disponibilité, la fiabilité et la continuité de service des données critiques, avec des mécanismes de sauvegarde et d’infogérance adaptés à chaque organisation.'),
                ],
                'images' => [
                    asset('images/services/datacenter/1.jpg'),
                    asset('images/services/infrastructures-reseaux/2.jpg'),
                    asset('images/services/infrastructures-reseaux/3.jpg'),
                    asset('images/services/datacenter/2.jpg'),
                    asset('images/services/datacenter/3.jpg'),
                    asset('images/services/infrastructures-reseaux/1.jpg'),
                ],
            ],
            'donnees-analyse' => [
                'label' => __('DONNÉES ET ANALYSE'),
                'title' => __('Conseil, transformation digitale et analyse des données'),
                'description' => __('Accompagnement stratégique et valorisation des données : cadrage des projets, modernisation des outils et interprétation des données pour éclairer la décision et accélérer la transformation digitale.'),
                'body' => [
                    __('Nous accompagnons les organisations dans le cadrage de leurs projets numériques et la modernisation de leurs outils, avec une méthode qui relie ambition stratégique et exécution technique. Chaque intervention part d’une lecture claire des enjeux métier pour proposer une trajectoire de transformation réaliste et mesurable.'),
                    __('Cette démarche s’appuie sur l’exploitation des données : collecte, traitement et interprétation pour transformer l’information brute en aide à la décision. Nos analyses donnent aux organisations une meilleure lisibilité de leurs opérations et des leviers concrets pour améliorer leur performance.'),
                ],
                'images' => [
                    asset('images/services/conseil-transformation-digital/1.jpg'),
                    asset('images/services/conseil-transformation-digital/2.jpg'),
                    asset('images/services/conseil-transformation-digital/3.jpg'),
                    asset('images/services/analyse-donnees/1.jpg'),
                    asset('images/services/analyse-donnees/2.jpg'),
                    asset('images/services/analyse-donnees/3.jpg'),
                ],
            ],
            'developpement-web-mobile' => [
                'label' => __('DÉVELOPPEMENT WEB ET MOBILE'),
                'title' => __('Solutions web et mobiles sur mesure'),
                'description' => __('Conception et développement d’applications web et mobiles robustes, évolutives et centrées sur les besoins métier des organisations.'),
                'body' => [
                    __('Nous concevons et développons des applications web et mobiles robustes, évolutives et centrées sur les besoins métier des organisations que nous accompagnons. De la définition du besoin à la mise en production, chaque projet suit une méthode rigoureuse pensée pour la fiabilité et la maintenabilité dans la durée.'),
                    __('Nos équipes interviennent aussi bien sur des sites vitrines et plateformes e-commerce que sur des applications métier ou mobiles complexes, avec une attention constante portée à la performance, à l’expérience utilisateur et à la sécurité des solutions livrées.'),
                ],
                'images' => [
                    asset('images/services/developpement-web-mobile/1.jpg'),
                    asset('images/services/developpement-web-mobile/2.jpg'),
                    asset('images/services/developpement-web-mobile/3.png'),
                ],
            ],
            'formations' => [
                'label' => __('FORMATIONS'),
                'title' => __('Formations professionnelles et académiques'),
                'description' => __('Programmes de formation adaptés aux étudiants comme aux professionnels, couvrant les domaines du numérique, des télécommunications, de la cybersécurité et du développement, pour renforcer durablement les compétences techniques.'),
                'body' => [
                    __('Nous concevons des programmes de formation adaptés aussi bien aux étudiants qu’aux professionnels en activité, couvrant les domaines du numérique, des télécommunications, de la cybersécurité et du développement. Chaque parcours est construit pour répondre à un besoin réel de montée en compétences.'),
                    __('Notre objectif est de renforcer durablement les capacités techniques des équipes que nous formons, avec une pédagogie concrète, ancrée dans la pratique, et un transfert de compétences pensé pour rester utile bien après la fin de la formation.'),
                ],
                'images' => [
                    asset('images/services/formations/1.jpg'),
                    asset('images/services/formations/2.jpg'),
                    asset('images/services/formations/3.jpg'),
                ],
            ],
        ];
    }

    public function index()
    {
        return view('services', ['services' => $this->services()]);
    }

    public function show($locale, $slug)
    {
        $services = $this->services();

        abort_unless(isset($services[$slug]), 404);

        return view('service-detail', [
            'slug' => $slug,
            'service' => $services[$slug],
            'otherServices' => collect($services)->except($slug),
        ]);
    }
}
