<?php
/**
 * GME Alliance — central content data.
 * Single source of truth for operating companies, platforms, navigation, and
 * leadership so they stay consistent across every page. Edit here once.
 *
 * To swap a placeholder logo: drop the real file in assets/img/companies/
 * (keep the same filename, or update "logo" below) and set "url".
 */

const SITE = [
    'name'     => 'GME Alliance',
    'tagline'  => 'Building and Operating Platforms Across the Americas',
    'email'    => 'info@gmealliance.com',
    'phone'    => '',                       // TODO: add main line
    'address'  => ['GME Alliance LLC', '924 NW 1st St', 'Fort Lauderdale, FL 33311, USA'],
    'linkedin' => '#',                      // TODO: company LinkedIn URL
    'base_url' => 'https://gmealliance.com',
];

/** Primary navigation — label => file (key used for active state) */
const NAV = [
    'home'        => ['Home', 'index.php'],
    'about'       => ['About', 'about.php'],
    'platforms'   => ['Platforms', 'platforms.php'],
    'companies'   => ['Operating Companies', 'operating-companies.php'],
    'projects'    => ['Projects & Initiatives', 'projects.php'],
    'leadership'  => ['Leadership', 'leadership.php'],
    'contact'     => ['Contact', 'contact.php'],
];

/** The four operating platforms. */
const PLATFORMS = [
    'infrastructure' => [
        'title'     => 'Infrastructure & Connectivity',
        'companies' => 'GridLink · Redbird Network',
        'summary'   => 'Power-ready sites, fiber, and resilient communications infrastructure built in partnership with utilities, co-ops, and regional carriers.',
        'icon'      => 'grid',
        'image'     => 'assets/img/content/platform-infrastructure.png',
        'focus'     => ['Power-ready infrastructure', 'Fiber infrastructure', 'Utility partnerships', 'Grid modernization', 'Resilient connectivity'],
    ],
    'mobility' => [
        'title'     => 'Mobility & IoT Technologies',
        'companies' => 'Express Distribution · RoadTech TPMS',
        'summary'   => 'Connected mobility and safety technologies for the RV, trailer, and transportation industries, from sensors to OEM and dealer distribution.',
        'icon'      => 'signal',
        'image'     => 'assets/img/content/platform-mobility.png',
        'focus'     => ['RV technology', 'Trailer safety systems', 'TPMS', 'IoT monitoring', 'OEM integration', 'Dealer distribution'],
    ],
    'development' => [
        'title'     => 'Development & Construction',
        'companies' => 'ATEX Group',
        'summary'   => 'Multifamily, workforce housing, and site development that supports community growth and infrastructure-related construction.',
        'icon'      => 'building',
        'image'     => 'assets/img/content/platform-development.jpg',
        'focus'     => ['Multifamily housing', 'Workforce housing', 'Construction', 'Site development', 'Community growth'],
    ],
    'supply' => [
        'title'     => 'Industrial & Safety Supply',
        'companies' => 'GME Supply',
        'summary'   => 'Industrial products, safety equipment, and procurement that keep infrastructure, utility, and construction operations running.',
        'icon'      => 'shield',
        'image'     => 'assets/img/content/platform-supply.png',
        'focus'     => ['Industrial products', 'Safety equipment', 'Utility support products', 'Infrastructure procurement', 'Logistics support'],
    ],
];

/**
 * Operating companies.
 * logo  => file in assets/img/companies/ (placeholder wordmarks for now)
 * url   => '' shows as "Coming soon"; a real URL renders an outbound link.
 */
const COMPANIES = [
    'gme-supply' => [
        'name'    => 'GME Supply',
        'logo'    => 'gme-supply-white-alt.webp',
        'url'     => 'https://www.gmesupply.com/',
        'dark'    => true,
        'tags'    => ['Industrial', 'Safety Supply'],
        'short'   => 'Industrial and safety supply solutions supporting infrastructure, utility, logistics, and construction operations.',
        'focus'   => ['Industrial products', 'Safety equipment', 'Utility support products', 'Infrastructure procurement'],
    ],
    'express-distribution' => [
        'name'    => 'Express Distribution',
        'logo'    => 'express.webp',
        'url'     => 'https://expressdistr.com/',
        'fill'    => true,
        'tags'    => ['Mobility', 'Distribution'],
        'short'   => 'Distribution platform for connected mobility and safety products across the RV, trailer, and transportation industries.',
        'focus'   => ['Dealer distribution', 'OEM integration', 'Connected mobility', 'Aftermarket supply'],
    ],
    'roadtech' => [
        'name'    => 'RoadTech',
        'logo'    => 'roadtech.webp',
        'url'     => 'https://www.roadtechtpms.com/',
        'dark'    => true,
        'tags'    => ['IoT', 'Mobility'],
        'short'   => 'Connected mobility and safety technologies — TPMS and IoT monitoring — for the RV, trailer, and transportation industries.',
        'focus'   => ['TPMS', 'IoT monitoring', 'OEM integrations', 'Trailer safety systems'],
    ],
    'atex-group' => [
        'name'    => 'ATEX Group',
        'logo'    => 'Atex.webp',
        'url'     => 'https://atexgrp.com/',
        'tags'    => ['Development', 'Construction'],
        'short'   => 'Development and construction platform supporting multifamily, workforce housing, and infrastructure-related projects.',
        'focus'   => ['Multifamily', 'Workforce housing', 'Site development', 'Construction'],
    ],
    'gridlink' => [
        'name'    => 'GridLink',
        'logo'    => 'GridLink.webp',
        'url'     => '', // TODO: GridLink website URL pending
        'tags'    => ['Power', 'Fiber'],
        'short'   => 'Power, fiber, and infrastructure platform supporting resilient connectivity and industrial growth.',
        'focus'   => ['Utility partnerships', 'Power-ready sites', 'Fiber infrastructure', 'Industrial infrastructure'],
    ],
    'redbird-network' => [
        'name'    => 'Redbird Network',
        'logo'    => 'redbirdnetwork.webp',
        'url'     => 'https://redbirdnetwork.com/',
        'tags'    => ['Telecom', 'Connectivity'],
        'short'   => 'Connectivity and telecommunications infrastructure initiative focused on resilient communications and regional connectivity.',
        'focus'   => ['Regional connectivity', 'Resilient communications', 'Telecom infrastructure', 'Carrier partnerships'],
    ],
    'mar-ston' => [
        'name'    => 'Mar-Ston Foundation',
        'logo'    => 'marston.webp',
        'url'     => 'https://mar-ston.org/',
        'tags'    => ['Nonprofit', 'Community'],
        'short'   => 'Community-focused nonprofit initiative supporting workforce development, wellness, and community revitalization.',
        'focus'   => ['Workforce development', 'Community wellness', 'Revitalization', 'Local partnerships'],
        'foundation' => true,
    ],
];

/** Geographic reach. */
const REGIONS = [
    ['United States',    'Core operating base and infrastructure footprint.'],
    ['Mexico',           'Industrial supply, manufacturing, and cross-border logistics.'],
    ['Caribbean',        'Resilient connectivity and infrastructure initiatives.'],
    ['Central America',  'Connectivity, mobility, and community development.'],
    ['South America',    'Selective infrastructure and development opportunities.'],
];

/** Leadership — placeholder bios. TODO: replace with real names/photos/links. */
const LEADERS = [
    ['name' => 'Leadership Name', 'role' => 'Managing Principal',          'bio' => 'Oversees platform strategy, capital allocation, and operating-company governance across the group.', 'linkedin' => '#'],
    ['name' => 'Leadership Name', 'role' => 'Head of Infrastructure',       'bio' => 'Leads utility, power, and fiber partnerships and the development of power-ready and connectivity assets.', 'linkedin' => '#'],
    ['name' => 'Leadership Name', 'role' => 'Head of Operations',           'bio' => 'Responsible for operational performance, integration, and scaling across the operating companies.', 'linkedin' => '#'],
    ['name' => 'Leadership Name', 'role' => 'Head of Development',           'bio' => 'Directs multifamily, workforce housing, and site development initiatives and construction partnerships.', 'linkedin' => '#'],
    ['name' => 'Leadership Name', 'role' => 'Head of Mobility & Technology', 'bio' => 'Guides connected mobility, IoT, and OEM strategy across the mobility and distribution platforms.', 'linkedin' => '#'],
    ['name' => 'Leadership Name', 'role' => 'Head of Partnerships',          'bio' => 'Develops relationships with utilities, municipalities, OEMs, lenders, and enterprise customers.', 'linkedin' => '#'],
];

/** Projects & initiatives — placeholder entries. TODO: replace with real projects. */
const PROJECTS = [
    ['title' => 'Power-Ready Site Development',     'category' => 'Infrastructure', 'platform' => 'GridLink',             'desc' => 'Identifying and developing power-ready sites with utility and co-op partners to support industrial growth and resilient connectivity.', 'image' => 'assets/img/content/project-power-ready-site.png'],
    ['title' => 'Regional Fiber & Connectivity',    'category' => 'Telecom',        'platform' => 'Redbird Network',      'desc' => 'Extending resilient communications and regional connectivity infrastructure in underserved markets.', 'image' => 'assets/img/content/project-regional-fiber.png'],
    ['title' => 'Connected Mobility Rollout',       'category' => 'Mobility / IoT', 'platform' => 'RoadTech · Express',   'desc' => 'Scaling TPMS and IoT monitoring across OEM and dealer channels in the RV and trailer industries.', 'image' => 'assets/img/content/project-connected-mobility.png'],
    ['title' => 'Workforce Housing Development',    'category' => 'Development',     'platform' => 'ATEX Group',           'desc' => 'Advancing multifamily and workforce housing projects that support community growth near employment centers.', 'image' => 'assets/img/content/project-workforce-housing.webp'],
    ['title' => 'Infrastructure Supply Program',    'category' => 'Industrial',     'platform' => 'GME Supply',           'desc' => 'Procurement and logistics support keeping utility, construction, and infrastructure operations supplied and safe.', 'image' => 'assets/img/content/project-infrastructure-supply.jpg'],
    ['title' => 'Community Revitalization',         'category' => 'Community',      'platform' => 'Mar-Ston Foundation',  'desc' => 'Workforce development, wellness, and revitalization programs that strengthen the communities we operate in.', 'image' => 'assets/img/content/project-community-revitalization.jpg', 'foundation' => true],
];

/** Tiny inline-SVG icon set used across pages. */
function gme_icon(string $name): string {
    $p = [
        'grid'     => '<rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/>',
        'signal'   => '<path d="M5 12.5a9 9 0 0 1 14 0"/><path d="M8.5 16a4.5 4.5 0 0 1 7 0"/><circle cx="12" cy="19" r="1.2" fill="currentColor" stroke="none"/><path d="M2 9a14 14 0 0 1 20 0"/>',
        'building' => '<path d="M3 21h18"/><path d="M5 21V5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v16"/><path d="M14 21V9h4a1 1 0 0 1 1 1v11"/><path d="M8 8h2M8 12h2M8 16h2"/>',
        'shield'   => '<path d="M12 3l8 3v6c0 4.5-3.2 7.6-8 9-4.8-1.4-8-4.5-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/>',
        'handshake'=> '<path d="M11 17l2 2 4-4"/><path d="M3 12l4-4 4 3 3-2 6 5"/><path d="M3 12v4l3 3"/>',
        'route'    => '<circle cx="6" cy="19" r="2"/><circle cx="18" cy="5" r="2"/><path d="M8 19h6a4 4 0 0 0 0-8H10a4 4 0 0 1 0-8h6"/>',
        'layers'   => '<path d="M12 3l9 5-9 5-9-5 9-5z"/><path d="M3 13l9 5 9-5"/>',
        'compass'  => '<circle cx="12" cy="12" r="9"/><path d="M15.5 8.5l-2 5-5 2 2-5 5-2z"/>',
        'linkedin' => '<path d="M4 4h4v16H4z" fill="currentColor" stroke="none"/><circle cx="6" cy="3" r="0"/><path d="M10 9h3.6v2h.05c.5-.9 1.7-1.85 3.5-1.85 3.75 0 4.45 2.35 4.45 5.4V20H21v-4.8c0-1.15-.02-2.6-1.6-2.6-1.6 0-1.85 1.25-1.85 2.5V20H14V9z" fill="currentColor" stroke="none"/>',
        'user'     => '<circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 3.6-6 8-6s8 2 8 6"/>',
        'mail'     => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/>',
        'pin'      => '<path d="M12 21s-7-5.3-7-11a7 7 0 0 1 14 0c0 5.7-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/>',
        'arrow'    => '<path d="M5 12h14"/><path d="M13 6l6 6-6 6"/>',
        'doc'      => '<path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8z"/><path d="M14 3v5h5"/><path d="M9 13h6M9 17h6"/>',
    ];
    $body = $p[$name] ?? $p['arrow'];
    return '<svg class="gme-ic" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $body . '</svg>';
}
