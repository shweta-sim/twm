var bodyId = document.getElementsByTagName('body')[0].id;
if (bodyId.includes('work')) {
    document.getElementById('our-work').classList.add('active');
}

switch (bodyId) {
    case 'work-logos':
        document.getElementById('pills-logos-tab').classList.add('active');
        break;
    case 'work-branding':
        document.getElementById('pills-branding-tab').classList.add('active');
        break;
    case 'work-social-media':
        document.getElementById('pills-socialmedia-tab').classList.add('active');
        break;
    case 'work-leaflets':
        document.getElementById('pills-flyersposters-tab').classList.add('active');
        break;
    case 'work-websites':
        document.getElementById('pills-websitesapps-tab').classList.add('active');
        break;
    case 'work-prototypes':
        document
            .getElementById('pills-prototypessketches-tab')
            .classList.add('active');
        break;
    case 'work-research':
        document
            .getElementById('pills-researchdiscovery-tab')
            .classList.add('active');
        break;
    case 'work-photography':
        document.getElementById('pills-photography-tab').classList.add('active');
        break;
    case 'work-videos':
        document.getElementById('pills-videos-tab').classList.add('active');
        break;
    case 'work-business-cards':
        document.getElementById('pills-businesscards-tab').classList.add('active');
        break;
    case 'work-pitch-decks':
        document.getElementById('pills-pitchdecks-tab').classList.add('active');
        break;
}