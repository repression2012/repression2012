<?php

require_once("elements.php");

$notes = array(
	'notes' => array(),
	'offset' => 0
);


$header = array(
	title(
		array(
			strong("Répression, Discrimination et Grève Étudiante:"),
			br(),
			"Analyse et témoignages"
		)
	),
	paragraph(
		array(
			"Avril 2013 - ",
			strong("Rapport"),
			br(),
			"de la Ligue des droits et libertés,",
			br(),
			"de l’Association des juristes progressistes",
			br(),
			"et de l’Association pour une solidarité syndicale étudiante"
		),
		'rightAligned'
	)
);

$coverImage = array(
	image(
		"images/fromPDF/couverture.jpeg",
		"Couverture du rapport: une manifestante à côté d'une rangée de policiers",
		'underlay',
		"Photo de couverture © Mario Jean / MADOC 2012"
	)
);

$introSection =	array(
	section(
		$toc,
		array(
			sectionTitle($toc,"Introduction"),
			blockquote(
				array(
					paragraph(
						array(
							"Aujourd’hui a été le premier anniversaire du jour où j’ai perdu la vue de mon œil droit,",
							br(),
							"où j’ai commencé à avoir des maux de tête de façon régulière,",
							br(),
							"où j’ai commencé à avoir des douleurs lorsqu’il y a de la lumière,",
							br(),
							"où mes passions pour la création et l’art se sont énormément complexifiées,",
							br(),
							"où je me suis senti diminué physiquement par rapport aux autres,",
							br(),
							"où j’ai commencé à avoir peur des forces policières",
							br(),
							"et des bruits semblables à ceux produits par les outils de répression qu’elles utilisent."
						)
					),
					paragraph("Bien qu’étant un triste anniversaire, le 7 mars est aussi le jour où j’ai arrêté de croire et que j’ai su. J’ai su qu’il faut toujours se battre pour avoir justice et que la violence, les menaces et la haine ne pourront jamais mettre un frein à mon désir de justice."),
					cite("Francis Grenier, 7 mars 2013")
				)
			),
			subsectionTitle($toc,"Mise en contexte"),
			paragraph("Le Québec a vécu en 2012 la plus longue et la plus importante grève étudiante de son histoire. Le mouvement de grève et de contestation sociale a donné lieu, dans la foulée, à la plus grande vague d’arrestations de l’histoire du Québec. Jamais non plus n’aura-t-on connu au Québec une aussi forte instrumentalisation du pouvoir judiciaire et un profilage discriminatoire aussi généralisé pour réprimer la mobilisation étudiante et étouffer, sans succès, la contestation."),
			paragraph(
				array(
					"Ce rapport examine, notamment, les aspects suivants : le nombre d’arrestations sans précédent, soit 3 509 arrestations du 16 février au 3 septembre 2012",
					renvoi(
						$notes,
						array(
							"Voir Annexe 1. Ce bilan des arrestations a été dressé à  partir du suivi effectué par le comité légal de la CLASSE et du bilan du Collectif opposé à la brutalité policière, en ligne sur le site web du ",
							linkAnchor("http://cobp.resist.ca/documentation/gr-ve-tudiante-2012-3469-arrestations-du-16-f-vrier-au-3-septembre-2012-bilan-d-finiti", "COBP")
						)
					),
					"; les allégations de brutalité policière; l’utilisation sciemment détournée de dispositions législatives existantes, soit les accusations abusives et désincarnées (dont, pour la fumée dans le métro, celle d’incitation à craindre le terrorisme), les arrestations et détentions préventives en vertu de l’article 31 du ",
					em("Code criminel"),
					renvoi(
						$notes,
						array(
							linkAnchor("http://laws-lois.justice.gc.ca/fra/lois/C-46/page-12.html#docCont", "Code criminel du Canada"),
							", L.R.C. (1985), c. C-46."
						)
					),
					" et les constats d’infraction émis en vertu du ",
					em("Code de la sécurité routière"),
					renvoi(
						$notes,
						array(
							linkAnchor("http://www2.publicationsduquebec.gouv.qc.ca/dynamicSearch/telecharge.php?file=/C_24_2/C24_2.htm&amp;type=3#s500.1", "Code de la sécurité routière"),
							", L.R.Q., c. 24.2."
						)
					),
					"; la fabrication de nouveaux outils, soit l’adoption précipitée de règlements municipaux limitant le droit de manifester et l’adoption d’une loi spéciale répressive et liberticide; la négation des droits collectifs des associations étudiantes avec la pluie d’injonctions ordonnant aux associations étudiantes de cesser de bloquer l’accès aux salles de cours et aux établissements."
				)
			),
			paragraph(
				array(
					"Au cours de cette période, de nombreuses personnes ont été victimes de brutalité policière, d’atteintes à leur intégrité physique, de violence verbale et psychologique. Des militantEs ont fait l’objet de surveillance ciblée. L’escouade GAMMA (Guet des activités et des mouvements marginaux et anarchistes), créée par le SPVM, a ciblé le mouvement étudiant avant le déclenchement de la grève. Elle a procédé, entre juin et octobre 2011, à l’arrestation de quatorze militantEs impliquéEs au sein de l’ASSÉ sur la base des manifestations des 24 et 31 mars 2011 contre la hausse des frais de scolarité",
					renvoi(
						$notes,
						array(
							"Les chefs d’accusation contre ces personnes comprennent des choses comme introduction par effraction, prise de possession d’un lieu par la force, complot en vue de commettre une introduction par effraction, complot en vue de commettre un méfait, complot en vue de prendre un lieu par la force."
						)
					),
					". Il semble que ces arrestations ciblées de militantEs  de l’ASSÉ aient visé à limiter leur action politique en prévision d’un mouvement de grève générale illimitée. GAMMA ayant opéré sous la division du «&nbsp;crime organisé&nbsp;» du SPVM, il semble que l’ASSÉ ait été assimilée à une organisation criminelle."
				)
			),
			paragraph(
				array(
					"Devant l’ampleur des atteintes aux droits fondamentaux survenues en 2012, plusieurs personnes, organismes, syndicats et autres ont réclamé la tenue d’une enquête publique",
					renvoi(
						$notes,
						array(
							"Du nombre, on compte une trentaine d’organismes communautaires de la région de Québec (Radio-Canada, «&nbsp;",
							linkAnchor("http://www.radio-canada.ca/regions/Quebec/2012/11/01/008-conflit-etudiant-enquete-publique-organismes.shtml", "Conflit étudiant&nbsp;: des citoyens réclament une enquête publique"),
							"&nbsp», 1",
							sup("er"),
							" novembre 2012); un collectif de 131 enseignants et enseignantes (Brian Myles, «&nbsp;",
							linkAnchor("http://www.ledevoir.com/societe/justice/359472/un-collectif-d-enseignants-exige-une-enquete-publique-sur-le-travail-policier", "Conflit étudiant – Un collectif d’enseignants exige une enquête publique sur le travail policier&nbsp;"),
							"&nbsp;»,",
							em("Le Devoir"),
							", 19 septembre 2012); et 52 autres groupes dont la Ligue des droits et libertés, l’AJP, l’ASSÉ, la FECQ et la FEUQ&nbsp; (Radio-Canada avec la Presse Canadienne, «&nbsp;",
							linkAnchor("http://www.radio-canada.ca/nouvelles/societe/2012/11/13/005-coalition-violence-policiere.shtml", "Conflit étudiant&nbsp;: coalition pour une enquête publique sur le travail des policiers"),
							"&nbsp;», 13 novembre 2012)."
						)
					),
					"."
				)
			),
			paragraph(
				array(
					"Cette répression politique, judiciaire et policière des mouvements de contestation sociale s’inscrit dans une tendance que la ",
					em("Ligue des droits et libertés"),
					" et d’autres organismes dénoncent depuis longtemps. Devant l’ampleur de la répression survenue en 2001 lors du ",
					em("Sommet des Amériques"),
					renvoi(
						$notes,
						array(
							"Ligue des droits et libertés, ",
							linkAnchor("http://liguedesdroits.ca/wp-content/fichiers/rap-2001-06-14-sommet_des_ameriques.doc", "Violations des droits et libertés au Sommet des Amériques, Québec avril 2001. Rapport du Comité de surveillance des libertés civiles"),
							", 14 juin 2001."
						)
					),
					", la ",
					em("Ligue"),
					" avait dénoncé à l’ONU les plans d’interventions stratégiques des forces de l’ordre: la surveillance et l’infiltration des groupes avant la tenue des événements, l’utilisation d’agentEs provocateurs et provocatrices, l’utilisation d’armes et de gaz, les arrestations massives préventives et les conditions de détention abusives, voire cruelles, imposées aux manifestantEs."
				)
			),
			paragraph(
				array(
					"En 2005, le ",
					em("Comité contre la torture"),
					" avait recommandé que le Canada procède à une étude publique et indépendante de ses méthodes de contrôle de foule, soit l’emploi d’armes chimiques, irritantes, incapacitantes ou mécaniques, tels le pistolet Taser et les pistolets à balles de plastique",
					renvoi(
						$notes,
						array(
							"ONU, Comité contre la torture, ",
							linkAnchor("http://www.unhchr.ch/tbs/doc.nsf/(Symbol)/CAT.C.CR.34.CAN.Fr?Opendocument", "Conclusions et recommandations : Canada"),
							", 2005, CAT/C/CR/34/CAN.",
						)
					),
					". Dans son sixième rapport périodique au Comité, le Canada a indiqué que ces recommandations ne seraient pas mises en œuvre car les grandes manifestations qui sont susceptibles de troubler l’ordre public sont relativement peu nombreuses",
					renvoi(
						$notes,
						array(
							"ONU, Comité contre la torture, Examen des rapports soumis par les États parties en application de l’article 19 de la Convention,",
							linkAnchor("http://www2.ohchr.org/english/bodies/cat/docs/CAT.C.CAN.6_fr.pdf", "Sixième rapport périodique devant être soumis en 2008 : Canada"),
							", ",
							em("4 octobre 2010, CAT/C/CAN/6, au para. 103.")
						)
					),
					"."
				)
			),  
			paragraph(
				array(
					"En 2006, le ",
					em("Comité des droits de l’homme"),
					" dans ses ",
					em("Observations finales"),
					", a recommandé:",
					blockquote(
						array(
							paragraph(
								array(
									"L’État [canadien] devrait veiller à ce que le droit de chacun de participer pacifiquement à des manifestations de protestation sociale soit respecté et à ce que seuls ceux qui ont commis des infractions pénales au cours des manifestations soient arrêtés. Le Comité invite aussi l’État [canadien] à enquêter sur les pratiques des forces de police de Montréal pendant les manifestations et souhaite recevoir des renseignements plus détaillés sur la mise en œuvre concrète de l’article 63 du Code pénal relatif à l’attroupement illégal",
									renvoi(
										$notes,
										array(
											"ONU, Comité des droits de l’homme, 85ième sess., Examen des rapports présentés par les États parties en vertu de l’article 40 du Pacte, ",
											linkAnchor("http://www.unhchr.ch/tbs/doc.nsf/898586b1dc7b4043c1256a450044f331/c80c2092096be2b9c12571640046c95d/\$FILE/G0641363.pdf", "Observations finales du Comité des droits de l’homme – Canada"),
											", 20 avril 2006, CCPR/C/CAN/CO/5, au para. 20."
										)
									),
									"."
								)
							)
						)
					)
				)
			),
			paragraph("Non seulement le Canada n’a-t-il pas donné suite aux recommandations des comités onusiens, mais lors de la rencontre du G20 en 2010 à Toronto, la violation du droit de manifester y a pris une proportion historique. Pendant les deux jours du Sommet, les forces de l’ordre ont procédé à 1 105 arrestations, nombre alors sans précédent dans l’histoire récente du Canada (497 personnes l’avaient été lors de la crise d’octobre en 1970 et 463 au Sommet des Amériques en 2001)."),
			paragraph(
				array(
					"Ces arrestations préventives visaient à empêcher les citoyenNEs de participer aux manifestations futures. En effet, 96% des personnes arrêtées au G20 ont été innocentées ou ont vu leurs accusations tomber",
					renvoi(
						$notes,
						array(
							"Francis Dupuis-Déri, «&nbsp;",
							linkAnchor("http://www.ledevoir.com/societe/justice/359443/pour-une-commission-d-enquete-publique", "Mouvement étudiant et répression policière, pour une commission d’enquête publique"),
							"&nbsp;», ",
							em("Le Devoir"),
							", 19 septembre 2012."
						)
					),
					". Sur les 1 105 personnes arrêtées, 800 ont été relâchées après détention sans aucune accusation, 150 accusations ont été retirées et des arrêts de procédure ont été ordonnés dans plusieurs cas."
				)
			),
			paragraph(
				array(
					"Plusieurs organisations de défense des droits humains ont décrié le durcissement de la répression politique au Canada depuis les 20 dernières années dans un rapport soumis à la ",
					em("Commission interaméricaine des droits de l’homme"),
					renvoi(
						$notes,
						array(
							"Clinique Internationale de défense des droits humains de l’UQAM, Ligue des droits et libertés, Fédération internationale des Ligues des droits de l’homme. ",
							linkAnchor("http://www.ciddhu.uqam.ca/documents/Rapport_Fran%C3%A7ais.pdf", "Document en soutien à l’audience portant sur la situation des libertés d’expression, de réunion et d’association au Canada, de même que le droit à la liberté, à la sécurité et à l’intégrité de la personne"),
							", 25 octobre 2010."
						)
					),
					". D’autres rapports ont condamné cette répression, dont ceux du Comité permanent de la sécurité publique et nationale de la Chambre des communes, de l’ombudsman de l’Ontario",
					renvoi(
						$notes,
						array(
							"André Marin, Rapport de l’Ombudsman, «&nbsp;",
							linkAnchor("http://www.ombudsman.on.ca/Files/sitemedia/Documents/Investigations/SORT%20Investigations/G20_final_FR_web.pdf", "Pris au piège de la Loi"),
							"», Enquête sur la conduite du ministère de la Sécurité communautaire et des Services correctionnels relativement au Règlement de l’Ontario 233/10 adopté en vertu de la Loi sur la protection des ouvrages publics, décembre 2010."
						)
					),
					" et du Bureau du directeur indépendant de l’examen de la police",
					renvoi(
						$notes,
						array(
							"Bureau du directeur indépendant de l’examen de la police, ",
							linkAnchor("https://www.oiprd.on.ca/cms/oiprd/media/image-main/pdf/g20_report_fre_single.pdf", "Droit de protestation et maintien de l’ordre. Rapport de l’examen systémique concernant le sommet du G20"),
							", Toronto, mai 2012. "
						)
					),
					"."
				)
			),
			paragraph(
				array(
					"En 2012, le ",
					em("Comité contre la torture"),
					" a réitéré son inquiétude concernant l’usage excessif de la force par des agentEs de la paix, les méthodes de contrôle de foule et les conditions de détention inhumaines dans le centre de détention temporaire lors du Sommet du G20. Le Comité a souligné la nécessité pour l’État de mener une enquête sur tous les aspects du sommet, ainsi que de s’assurer que toutes les allégations de mauvais traitement et usage excessif de la force par la police soient promptement et impartialement mises sous enquête et punies",
					renvoi(
						$notes,
						array(
							"ONU, Comité contre la torture, ",
							linkAnchor("http://www2.ohchr.org/english/bodies/cat/docs/CAT.C.CAN.6_fr.pdf", "Examen des rapports présentés par les États parties en application de l’article 19 de la Convention"),
							", Observations finales, Canada, 25 juin 2012, CAT/C/CAN/CO/6, au para. 22."
						)
					),
					"."
				)
			),
			subsectionTitle($toc,"Objectifs du projet"),
			paragraph(
				array(
					"C’est dans ce contexte que la ",
					em("Ligue des droits et libertés"),
					", le ",
					em("Comité légal de la CLASSE"),
					" et l’",
					em("Association des juristes progressistes"),
					" ont entrepris de recueillir les témoignages d’étudiantEs et de citoyenNEs qui, pendant la grève, ont fait l’objet d’intimidation ou de brutalité policière, d’arrestation, de détention, d’accusation ou de représailles ou n’ont pu avoir accès à des lieux publics ou à des services parce qu’ils ou elles portaient un carré rouge. Pour les trois organismes, ce projet vise à dresser un portrait plus complet de l’ampleur de la répression policière, judiciaire et politique, à documenter les événements et à les analyser sous l’angle du respect des droits et libertés de la personne."
				)
			),
			subsectionTitle($toc,"Méthodologie"),
			paragraph(
				array(
					"Un appel conjoint aux témoignages a été lancé le 5 juillet 2012. Les organismes l’ont fait circuler dans leurs réseaux, accompagné d’un aide-mémoire pour aider les gens à rédiger leur témoignage et pour faire connaître les règles de confidentialité. Une vidéo a été réalisée par une membre de l’équipe en collaboration avec CUTV pour faire connaître le projet",
					renvoi(
						$notes,
						array(
							"CUTV, ",
							linkAnchor("http://cutvmontreal.ca/videos/2239", "Appel aux témoignages de la CLASSE-Ligue-AJP"),
							", 27 septembre 2012."
						)
					),
					". Des membres de l’équipe ont tenu deux séances de récolte de témoignages verbaux dans des lieux publics. La ",
					em("Ligue"),
					" et la ",
					em("CLASSE"),
					" avaient déjà reçu de nombreux témoignages écrits qui ont été ajoutés aux autres témoignages recueillis. Ces différents moyens ont permis de recueillir 274 témoignages."
				)
			),
			paragraph(
				array(
					"En plus de ceux-là, nous avons analysé 83 témoignages publics, parus dans les médias ou les réseaux sociaux et 27 témoignages récoltés par le COBP. En tout, l’équipe a analysé environ 384 témoignages. Plusieurs d’entre eux décrivaient plus d’un événement. Les témoignages ont tout d’abord été lus puis résumés et compilés à l’aide d’une grille d’analyse avant d’être catégorisés par thèmes et analysés par de petites équipes. De plus, un travail de recherche juridique a été effectué sur divers thèmes dont la notion d’arrestation préventive, le ",
					em("Code de la sécurité routière"),
					", les lois spéciales, etc."
				)
			),
			paragraph("L’équipe de travail était composée des personnes suivantes&nbsp;: Sibel Ataogul, Mélissa Beaulieu-Lussier, Marlie Bélanger, Nicolas Benoit-Guay, Andrée Bourbeau, Dominique Boutin, Alia Chakridi, Maryse Décarie-Daignault, Nicole Filion,&nbsp;Véronique Fortin, Marjorie Gagnon, Émilie Joly, Lucie Lemonde, Michaël Lessard, Guillaume Loiselle-Boudreau, Tristan Ouimet Savard, Jacinthe Poisson, Maryse Poisson, Arij Riahi, Marie-Claude St-Amant."),
			paragraph("L’équipe de rédaction et de révision finale était composée de Véronique Fortin, Lucie Lemonde, Jacinthe Poisson et Maryse Poisson."),
			paragraph(
				array(
					"La mise en pages du rapport a été réalisée par Moïse Marcoux-Chabot, à l’aide des photographies de Darren Ell (",
					linkAnchor("http://www.darrenell.com", "www.darrenell.com"),
					"), Mario Jean / MADOC (",
					linkAnchor("http://www.printempsquebecois.com", "www.printempsquebecois.com"),
					") et Sylvie Béland."
				)
			),
			subsectionTitle($toc,"La structure du texte"),
			paragraph(
				array(
					"La brutalité policière est le premier thème abordé dans ce rapport, vu son caractère transversal et son importance dans l’ensemble des situations vécues par les témoins. Les thèmes qui suivent dressent un portrait des évènements marquants de la grève : les arrestations individuelles et massives, les accusations en vertu des règlements municipaux et du ",
					em("Code de la sécurité routière"),
					", les accusations criminelles, puis les fouilles et détentions en vertu de l’article 31 du ",
					em("Code criminel"),
					"."
				)
			), 
			paragraph("Nous présentons ensuite les témoignages portant sur les représailles et la discrimination subies pour avoir porté le carré rouge, la question de la loi spéciale et la saga des injonctions. Un des derniers chapitres offre un portrait des émotions, perceptions et interprétations des personnes ayant vécu ces événements. La conclusion fait un survol des violations de droits et le rapport se termine par une série de recommandations."),
			notes($notes)
		)
	)
);

$brutalitePoliciere = array(
	section(
		$toc,
		array(
			image(
				"images/fromPDF/brutalitePoliciere.jpeg",
				"La brutalité policière",
				null,
				"Photo © Darren Ell 2012"
			),
			sectionTitle($toc,"La brutalité policière"),
			blockquote(
				array(
					paragraph("Je suis trop assommé pour me lever. Je suis convaincu qu’ils sont en train de me tuer. Je leur ai dit d’arrêter de me frapper s’ils veulent que je parte."),
					cite("Un homme portant un drapeau rouge à la manifestation du 1<sup>er</sup> mai 2012")
				)
			),
			paragraph("Selon les témoignages recueillis, les policiÈres ont fait usage de violence verbale et de «&nbsp;force plus grande que nécessaire&nbsp;» pour contrôler des manifestantEs exerçant leurs droits garantis par les chartes. Dans ces témoignages, plus de 120 évènements de brutalité policière sont relatés."),
			subsectionTitle($toc,"Incidents de violence policière"),
			
			chapterTitle($toc, "La violence physique"),
			blockquote(
				array(
					paragraph("Pourquoi arrêter les manifestants […]en utilisant une force qui pourrait tuer ou rendre paraplégique ? Pourquoi frapper une personne déjà à terre?"),
					cite("Un témoin choqué d’assister à une scène où des policiers donnent des coups de matraque derrière le cou des manifestantEs et constatant qu’une victime gît inconsciente dans une flaque de sang")
				)
			),
			paragraph(
				array(
					"Plusieurs témoins affirment avoir été bousculés, poussés, matraqués, frappés, piétinés, plaqués violemment contre des murs, étranglés ou traînés sur le sol",
					renvoi(
						$notes,
						array(
							"Voir notamment la vidéo suivante, montrant un homme projeté violemment au sol le 16 mai 2012, après une manifestation en soirée : ",
							linkAnchor("http://www.youtube.com/watch?v=9TU69PpsEPo", "http://www.youtube.com/watch?v=9TU69PpsEPo"),
							" ; Voir aussi cette vidéo d’un policier frappant des manifestantEs lors d’un rassemblement en face des locaux du Ministère de l’éducation le 27 janvier 2012 : ",
							linkAnchor("http://www.youtube.com/watch?v=DWG0jjSq2Xk", "http://www.youtube.com/watch?v=DWG0jjSq2Xk .")
						)
					),
					". Ils disent avoir été tirés par les cheveux, s’être fait tordre les bras ou avoir reçu des coups de poing au visage. Dans certains cas, plusieurs policiÈres immobilisaient la victime pendant que leurs collègues la brutalisaient. Une personne a raconté qu’un policier lui a donné des coups de pieds dans les côtes alors qu’un autre lui écrasait la tête sur le sol avec le genou. D’autres personnes rapportent avoir été rudoyées, avoir reçu des coups de poing, des coups de pied ou de genou, avoir été frappées avec des matraques, des boucliers et même des bicyclettes."
				)
			),
			paragraph(
				array(
					"Ces incidents ont causé plusieurs blessures&nbsp;: éraflures, ecchymoses, enflures, entorses aux poignets, aux chevilles, au cou et même des fractures de côtes, de jambes et de bras. Un jeune homme, manifestant pacifiquement le 1<sup>er</sup> mai, a subi de multiples fractures à la boîte crânienne",
					renvoi(
						$notes,
						array(
							"Philippe Teisceira-Lessard, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/actualites/regional/montreal/201205/03/01-4521696-un-manifestant-blesse-envisage-de-porter-plainte.php", "Un manifestant blessé envisage de porter plainte&nbsp;"),
							"», ",
							em("La Presse, 3 mai 2012.")
						)
					),
					". Plusieurs victimes ont subi des blessures graves et permanentes lors des événements de Victoriaville",
					renvoi(
						$notes,
						array(
							"Voir page 9 du rapport pour une description plus détaillée des événements de Victoriaville."
						)
					),
					"&nbsp;: rappelons qu’une femme a reçu un projectile en plein visage et a subi d’importantes fractures de la mâchoire et que deux hommes ont subi de sévères traumatismes crâniens, avec pour conséquences que l’un d’eux a perdu l’usage d’un œil et que l’autre a perdu l’usage d’une oreille et doit vivre avec de lourdes séquelles, notamment des pertes d’équilibre.  Rappelons aussi qu’avant les événements de Victoriaville, un autre homme avait perdu l’usage d’un œil en raison de l’explosion d’une grenade assourdissante dans une manifestation."
				)
			),
			paragraph("En fait, plusieurs personnes ont été hospitalisées en raison de blessures subies. Ces personnes gardent des séquelles telles que des pertes de flexibilité ou de motricité et une perte d’acuité visuelle dans le cas de la personne ayant subi le traumatisme crânien. Elles sont plusieurs à avoir été forcées de quitter leur emploi pendant des semaines en raison de la gravité de leurs blessures. Certaines ont été forcées de cesser de conduire un véhicule et d’autres ont été restreintes dans leur mobilité (incapacité ou difficulté à marcher). Plusieurs ont mentionné avoir subi des chocs post-traumatiques et une personne a même mentionné avoir développé une grande peur de mourir dans la rue."),
			paragraph("Plusieurs victimes affirment que les menottes (ou les attaches de nylon «&nbsp;tie-wrap&nbsp;») trop serrées leur ont causé des blessures aux poignets et aux chevilles. Lorsque ces personnes ont demandé aux policiers de desserrer les menottes ou les attaches, les policiers leur ont tapé sur les mains ou ont répondu «&nbsp;tu les veux plus serrées&nbsp;?&nbsp;» afin de les faire souffrir davantage. Une personne affirme que les policiers l’ont traitée de «&nbsp;lâche&nbsp;» et de «&nbsp;faible&nbsp;» alors qu’elle demandait qu’on desserre un peu ses menottes. Les policiers avaient de la difficulté à couper les  attaches avec des ciseaux tellement elles étaient serrées."),
			paragraph("Plusieurs personnes détenues ont dû attendre des heures sans pouvoir boire, manger ou aller aux toilettes, au point d’être forcées d’uriner dans leur pantalon ou en public. Certaines personnes ont souffert de déshydratation et de coup de chaleur. D’autres ont subi des fouilles intrusives et abusives. Des femmes affirment que des agents leur ont «&nbsp;tâté les seins devant tout le monde&nbsp;», leur ont «&nbsp;levé la robe en public&nbsp;» et ont procédé à des fouilles portant atteinte à leur vie privée et à leur intimité."),
			
			chapterTitle($toc, "La violence verbale et psychologique"),
			paragraph("Les témoignages rapportent de nombreux incidents où des propos injurieux, racistes, sexistes, homophobes, méprisants, dégradants, paternalistes et condescendants ont été tenus."),
			paragraph("Deux jeunes femmes qui portaient le carré rouge et qui étaient assises sur le bord d’un trottoir assez éloigné de la manifestation ont reçu des coups de matraque. Tout en les frappant, les policièEres les ont traitées de «&nbsp;salopes, hippies sales, mangeuses de graines, mangeuses de marde, on va vous arranger ça nous autres mes câlisses&nbsp;». Les policiers sont partis comme si de rien n’était, en les laissant sur le trottoir. Celle qui a reçu des coups à la jambe dit avoir eu de la difficulté à marcher durant plusieurs jours."),
			paragraph("Des gens affirment que des policiÈres les ont insultés en les traitant de «&nbsp;criss d’épais&nbsp;», en leur disant «&nbsp;ferme ta gueule&nbsp;»,  «&nbsp;t’es pas un citoyen, t’es un moron&nbsp;», «&nbsp;ce citoyen-là je m’en fous&nbsp;», «&nbsp;toutes les personnes qui participent aux manifestations de casseroles sont sur le BS&nbsp;» ou encore «&nbsp;est-ce que c’est le Canada ou le pays d’origine d’Amir Khadir qui a payé ses études ?&nbsp;». Un policier a dit à une personne d’origine asiatique : «&nbsp;crisse de Kim Jong-Il, on va te faire retourner dans ton pays&nbsp;»."),
			blockquote(
				array(
					paragraph("Je tentai de savoir pour quel motif on m’avait arrêté, et l’agent me répondit à peu près que c’était eux qui menaient, et que je n’avais pas mon mot à dire. Il me dit de manière extrêmement brutale, humiliante, condescendante et réductrice que j’étais un imbécile qui ferait mieux de retourner à l’école pour apprendre des choses au lieu de lancer des roches sur les policiÈres, parce que je suis bébé gâté et que je n’accepte pas de payer «&nbsp;cinquante cennes de plus&nbsp;»."),
					paragraph("Il m’a dit que je ne respectais pas les policiers et que je faisais mon «&nbsp;fin&nbsp;» avec mes droits, mais que maintenant que j’étais dans la position où j’étais, je riais moins et que c’était eux qui étaient dans une position de force. D’une manière résolument sarcastique et infantilisante, il m’a demandé si je voulais appeler «&nbsp;maman&nbsp;», et m’a appelé «&nbsp;ti-loup&nbsp;». "),
					cite("Un supporteur du mouvement qui s’est fait arrêter hors d’une manifestation et qui a reçu un constat d’infraction pour motif d’avoir «&nbsp;émis un bruit audible&nbsp;» et un autre pour avoir «&nbsp;continué ou répété un acte interdit après avoir reçu l’ordre d’unE agentE de la paix de cesser cet acte&nbsp;»")
				)
			),
			paragraph(
				array(
					"Rappelons que l’article 5 du ",
					em("Code de déontologie des policiers"),
					renvoi(
						$notes,
						array(
							linkAnchor("http://www.deontologie-policiere.gouv.qc.ca/index.php?id=46", "Code de déontologie des policiers du Québec"),
							", L.R.Q., c. P-13.1, r. 1."
						)
					),
					" édicte que «&nbsp;le policier doit se comporter de manière à préserver la confiance et la considération que requiert sa fonction&nbsp;». On spécifie qu’il ne doit pas faire usage d’un langage obscène, blasphématoire ou injurieux, ni tenir des propos injurieux fondés sur la race, la couleur, le sexe, l’orientation sexuelle, la religion, les convictions politiques, ni manquer de respect ou de politesse à l’égard de qui que ce soit."
				)
			),
			image(
				"images/fromPDF/armesLetaliteReduite.jpeg",
				"Armes à létalité réduite et armes de dispersion",
				null,
				"Photo © Darren Ell 2012"
			),
			subsectionTitle($toc,"Armes à létalité réduite et armes de dispersion"),
			blockquote(
				array(
					paragraph("J’avais peur pour ma vie, c’était irréel comme climat car il s’agissait de policiers qui nous agressaient. Je monte sur une table et je demande aux gens de rester calmes. J’ai de la difficulté à respirer, j’ai des nausées et les yeux me brûlent."),
					cite("Un témoin, rentrant chez lui un soir de mai, qui fut pris en souricière et aspergé de poivre de Cayenne sur la terrasse d’un bar de la rue St-Denis où il s’était réfugié")
				)
			),
			paragraph(
				array(
					"Les armes à ",
					em("létalité réduite"),
					" («&nbsp;less lethal weapons&nbsp;») ainsi que les armes de dispersion de foule ont été amplement utilisées par les forces de l’ordre lors des manifestations. Parmi ces armes, on recense des irritants chimiques, des gaz lacrymogènes, du poivre de Cayenne",
					renvoi(
						$notes,
						array(
							"Voir notamment la vidéo suivante montrant des policiÈres asperger des manifestantEs de poivre de Cayenne, dans la nuit du 19 au 20 mai 2012 à la terrasse du bar St-Bock, sur la rue St-Denis à Montréal: ",
							linkAnchor("http://www.youtube.com/watch?v=GGGVPZN9Jjw", "http://www.youtube.com/watch?v=GGGVPZN9Jjw"),
							" ; <br />Voir aussi cette vidéo filmée la nuit du 20 au 21 mai 2012 lorsque des manifestantEs pacifiques ont été poivréEs agressivement par l’agente du SPVM portant le numéro de matricule 728 : ",
							linkAnchor("http://www.youtube.com/watch?v=W05MoKEEYAk", "http://www.youtube.com/watch?v=W05MoKEEYAk"),
							"."
						)
					),
					", des armes à énergie cinétique projetant des balles de plastique, des balles de caoutchouc et des grenades assourdissantes",
					renvoi(
						$notes,
						array(
							"GAPPA, en collaboration avec 99%Média et Moïse Marcoux-Chabot, «&nbsp;",
							linkAnchor("http://www.99media.org/2013/03/gappa-grenades-assourdissantes-que.html", "Grenades assourdissantes : que cache le SPVM ?"),
							"&nbsp;», Enquête citoyenne sur les grenades assourdissantes, 12 mars 2013."
						)
					),
					". Soulignons que ces armes étaient auparavant appelées «&nbsp;non-lethal weapons&nbsp;» mais qu’on les appelle dorénavant «&nbsp;less lethal weapons&nbsp;» en raison du nombre de personnes tuées. L’utilisation de balles de plastique dur du type ",
					linkAnchor("http://policeordnance.com/2004/ARWEN/POC_SPEC_AR-1.pdf", "AR-1 Standard Energy"),
					" et tirées avec un fusil ",
					linkAnchor(
						"http://en.wikipedia.org/wiki/ARWEN",
						array(
							acronym("ARWEN", "Anti Riot Weapon ENfield")
						)
					),
					" est très problématique. Ce fusil multifonction peut contenir cinq projectiles de calibre 37mm, incluant aussi bien des balles de plastique dur que des grenades lacrymogènes ou des gaz irritants, et les tirer en moins de 4 secondes à une vitesse de plus de 250&nbsp;km/h",
					renvoi(
						$notes,
						array(
							"Moïse Marcoux-Chabot, «&nbsp;",
							linkAnchor("http://moisemarcouxchabot.com/2012/05/08/victoriaville-les-balles-de-plastique-sont-identifiees", "Victoriaville&nbsp;: les balles de plastique sont identifiées"),
							"&nbsp;», 8 mai 2012."
						)
					),
					"."
				)
			),
			paragraph(
				array(
					"Dès 2002, la ",
					em("Ligue des droits et libertés"),
					" concluait que «&nbsp;le recours aux balles de plastique n’est ni justifié ni raisonnable, à cause des blessures graves et même de la mort qu’elles peuvent causer&nbsp;» et appelait à l’interdiction immédiate de l’usage de celles-ci comme technique de contrôle de foules",
					renvoi(
						$notes,
						array(
							"Ligue des droits et libertés, ",
							linkAnchor("http://liguedesdroits.ca/wp-content/fichiers/balles-de-plastique-finale-14-mai-version-2012.pdf", "Rapport sur l’utilisation des balles de plastique lors de manifestations"),
							", 14 mai 2002, révisé mai 2012. De nombreuses organisations internationales, dont le Comité contre la torture des Nations Unies, Human Rights Watch et Amnistie Internationale, ont aussi réclamé l’interdiction pure et simple des balles de plastique pour le contrôle des foules. "
						)
					),
					"."
				)
			),
			paragraph(
				array(
					"Quoique ces projectiles n’aient pas encore été formellement identifiés comme étant la cause exacte des trois blessés graves de Victoriaville, plusieurs indices portent à croire que ce sont ces balles de plastique qui ont causé de graves blessures telles que la perte d’un œil, la perte de plusieurs dents",
					renvoi(
						$notes,
						array(
							"Mathieu Boivin, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/le-soleil/actualites/justice-et-faits-divers/201205/08/01-4523410-une-etudiante-de-luniversite-laval-blessee-en-plein-visage-a-victoriaville.php", "Une étudiante de l’Université Laval blessée en plein visage à Victoriaville"),
							"&nbsp;», Le Soleil, 9 mai 2012."
						)
					),
					" et un traumatisme crânien",
					renvoi(
						$notes,
						array(
							"Joé Habel, «&nbsp;",
									linkAnchor("http://trahir.wordpress.com/2012/05/07/habel/", "Lettre ouverte sur la manifestation de&nbsp;Victoriaville"),
									"&nbsp;», Trahir, 7 mai 2012."
						)
					),
					". Des témoins rapportent avoir vu des personnes s’écrouler après avoir reçu une balle de plastique. Mentionnons que l’émission ",
					em("Enquête"),
					", diffusée à la télévision de Radio-Canada le 28 mars 2013, a clairement contredit la version des faits jusqu’ici défendue par les forces de l’ordre, à l’effet que ces blessures graves n’auraient pas été causées par l’action des policiÈres et le recours à ces armes de contrôle de foule."
				)
			),
			aside(
				array(
					chapterTitle($toc, "Vendredi 4 mai 2012, Victoriaville. Première journée du Conseil général du Parti libéral."),
					paragraph("Devant initialement se tenir à Montréal, le Conseil général du Parti libéral du Québec (PLQ) avait été déménagé à Victoriaville, loin du centre-ville et —&nbsp;le PLQ l’espérait&nbsp;— loin des manifestations étudiantes. Or, les groupes sociaux «&nbsp;en colère contre les mesures austères&nbsp;» du gouvernement Charest n’ont pas tardé à organiser une marche à Victoriaville même. C’est ainsi qu’une cinquantaine d’autobus se sont rendus près de l’hôtel Victorin qui accueillait l’événement et au devant duquel un périmètre de sécurité avait été établi avec une frêle barrière de métal, à peine ancrée dans le sol. Vers 18h25, le cortège est arrivé aux abords du centre des congrès. Dès 18h30, l’escouade anti-émeute est intervenue sous prétexte que la clôture de sécurité avait été déplacée par la foule. La suite a fait les manchettes et, partout, la violence extrême des affrontements a été soulignée. Un manifestant  témoigne&nbsp;ainsi&nbsp;: «&nbsp;de toute ma vie&nbsp;(toutes les manifestations réunies), je n’ai vu autant de gaz lacrymogène&nbsp;»."),
					paragraph(
						array(
							"La Sûreté du Québec affirme que 33 projectiles ont été tirés par des armes à ",
							em("létalité réduite"),
							renvoi(
								$notes,
								array(
									"Brian Myles, «&nbsp;",
									linkAnchor("http://www.ledevoir.com/societe/actualites-en-societe/349736/la-sq-estime-que-son-operation-lors-de-l-emeute-a-victoriaville-a-ete-reussie", "La SQ estime que son opération lors de l’émeute à Victoriaville a été réussie"),
									"&nbsp;», ",
									em("Le Devoir, 10 mai 2012.")
								)
							),
							" et que 206 «&nbsp;irritants&nbsp;» ont été projetés",
							renvoi(
								$notes,
								array(
									"Radio-Canada, «&nbsp;",
									linkAnchor("http://www.radio-canada.ca/nouvelles/societe/2012/05/09/003-nouvelles_images-manifestant_blesse-victoriaville.shtml", "Violence à Victoriaville : une coalition demande une enquête sur le comportement policier"),
									"&nbsp;», 10 mai 2012."
								)
							),
							". On a recensé plus d’une dizaine de blessés ayant été transportés à l’hôpital, dont 3 dans un état grave. La ",
							em("Coalition opposée à la tarification et à la privatisation des services publics"),
							" a recensé de son côté «&nbsp;environ 400 blessures mineures traitées par des médics&nbsp;», dont des plaies ouvertes, des ecchymoses causées par des projectiles et des brûlures aux&nbsp;yeux&nbsp;»",
							renvoi(
								$notes,
								array(
									"Radio-Canada, «&nbsp;",
									linkAnchor("http://www.radio-canada.ca/nouvelles/societe/2012/05/09/003-nouvelles_images-manifestant_blesse-victoriaville.shtml", "Violence à Victoriaville : une coalition demande une enquête sur le comportement policier"),
									"&nbsp;», 10 mai 2012."
								)
							),
							". Plusieurs personnes ont raconté que les services d’urgence ont été ralentis, voire même bloqués, par les policiers. Selon un manifestant secouriste, ces derniers continuaient de charger et d’envoyer des gaz irritants, même en présence d’un blessé qui gisait inconscient, ayant reçu un projectile à la tête. Bien que des manifestantEs aient fait une chaîne humaine face aux policiÈres pour protéger la victime, celle-ci a dû être déplacée deux fois pour fuir l’escouade anti-émeute qui attaquait sans relâche.",
						)
					)
				)
			),
			blockquote(
				array(
					paragraph("Vendredi, j’ai connu l’horreur, je suis habitué de voir des gens dans de fâcheuses positions, mais de savoir que toutes les personnes à qui j’ai porté soin sont victimes de violence et ce de la part de ceux qui devraient justement les protéger, j’en reviens tout simplement pas. Une vitrine ou un œil ? Faut croire que c’est la vitrine qui l’emporte.&nbsp; Vraiment dans le cadre de mes fonctions de pompier, j’ai vu des choses à faire lever le cœur, mais juste de savoir quelle était la cause des horreurs que j’ai vues, ça me dresse le poil. Je repose la question: l’utilisation des gaz lacrymogènes au début de la manifestation me semblait efficace, pourquoi utiliser des balles de plastique qui blessent une SEULE personne, quand une grenade de gaz en fait reculer MILLE ??"),
					cite("Un pompier présent à la manifestation")
				)
			),
			paragraph(
				array(
					"La répression de la manifestation de Victoriaville a d’ailleurs été décriée comme étant particulièrement violente. Le photographe du Devoir, Jacques Nadeau, a raconté avoir été très frappé par la brutalité des affrontements : «&nbsp;Il y avait énormément de gaz lacrymogènes, se souvient-il. Je crois que la SQ a épuisé ses réserves ce jour-là, c’était du jamais vu.&nbsp;»",
					renvoi(
						$notes,
						array(
							"Patrick Bellerose, «&nbsp;",
							linkAnchor("http://quebec.huffingtonpost.ca/2012/08/17/jacques-nadeau-livre-photo-carre-rouge_n_1799441.html", "Jacques Nadeau lance un livre de photos sur le printemps érable&nbsp;"),
							"» ",
							em("Le Huffington Post Québec"),
							", 17 août 2012."
						)
					),
					" Les réactions exprimées dans les témoignages sont très vives. Plusieurs des récits traitent du refus des policiÈres d’aider les personnes blessées. Ayant porté assistance à un homme inconscient blessé à la tête et qui saignait de l’oreille abondamment, une manifestante rapporte que les agentEs de la Sureté du Québec ont refusé de l’aider et ont continué de lancer des gaz à quelques mètres de la victime. Une autre personne, ayant porté assistance à neuf personnes blessées par les balles de plastique ou incommodées par les gaz irritants, est révoltée que les policiÈres n’aient pas pris les moyens pour aider les blesséEs graves."
				)
			),
			paragraph(
				array(
					"Si la répression à Victoriaville a été particulièrement brutale, il ne faut pas penser que les armes à ",
					em("létalité réduite"),
					" n’ont été utilisées que lors de cette manifestation. Au plus fort de la grève, les irritants chimiques et les grenades assourdissantes étaient le lot quotidien des manifestantEs. Ainsi, des policiÈres ont aspergé de poivre de Cayenne à très courte distance des clientEs assis à la terrasse d’un bar, notamment au St-Bock&nbsp;rue Saint-Denis",
					renvoi(
						$notes,
						array(
							"Cette scène a été filmée: ",
							linkAnchor("http://www.youtube.com/watch?v=x-m6F0lFsyg", "http://www.youtube.com/watch?v=x-m6F0lFsyg")
						)
					),
					". Un homme a perdu l’usage d’un œil en raison d’une grenade assourdissante lancée dans la foule par un agent du SPVM le 7 mars 2012."
				)
			),
			
			subsectionTitle($toc,"Normes encadrant le travail policier et mécanismes de contrôle et de plainte"),
			paragraph(
				array(
					"Les témoignages recueillis démontrent que, dans le cadre de plusieurs interventions des forces de l’ordre, il y a eu usage excessif et injustifié de la force à l’endroit des manifestantEs et des observateurs ou observatrices. Selon l’article 6 du ",
					em("Code de déontologie des policiers"),
					", le policier ou la policière doit éviter toute forme d’abus d’autorité dans ses rapports avec le public. Notamment, il ou elle ne doit pas avoir recours à une force plus grande que celle nécessaire pour accomplir ce qui lui est enjoint ou permis de faire. Le policier qui fait preuve d’excès de force peut également être reconnu criminellement responsable de ses actes",
					renvoi(
						$notes,
						array(
							"Voir les articles 25 (3) et 25 du Code criminel. "
						)
					),
					". En vertu de l’article 4 de ce code, tout manquement ou omission concernant un devoir ou une norme&nbsp;de&nbsp;conduite constitue un acte dérogatoire et peut entraîner l’imposition d’une sanction.",
				)
			),
			paragraph(
				array(
					"Le système de plaintes en déontologie est décrié par plusieurs groupes de défense des droits depuis longtemps. Des 2 108 plaintes reçues par le ",
					em("Commissaire à la déontologie policière"),
					" entre le 1er avril 2011 et le 31 mars 2012, seulement 148 d’entre elles ont donné lieu à une enquête et, de ce nombre, seulement 61 dossiers ont été déposés devant le ",
					em("Comité de déontologie"),
					renvoi(
						$notes,
						array(
							"Commissaire à la déontologie policière, ",
							linkAnchor("http://www.deontologie-policiere.gouv.qc.ca/fileadmin/deonto/documents/publications-administratives/commissaire/Rapport_annuel_version_finale.pdf", "Rapport annuel de gestion 2011-2012"),
							", novembre 2012."
						)
					),
					". Selon une source médiatique",
					renvoi(
						$notes,
						array(
							"Nicolas Saillant, «&nbsp;",
							linkAnchor("http://www.journaldemontreal.com/2013/03/10/premier-cas-de-brutalite-entendu", "Premier cas de brutalité policière entendu"),
							"&nbsp;», ",
							em("Le Journal de Montréal, 10 mars 2013.")
						)
					),
					", 205 plaintes auraient été déposées au terme des manifestations étudiantes l’an dernier et 76 d’entre elles sont présentement sous enquête. En septembre 2012, on rapportait que plus de 46% des plaintes déposées en lien avec le mouvement étudiant avaient été refusées ou avaient fait l’objet d’une conciliation obligatoire",
					renvoi(
						$notes,
						array(
							"Caroline d’Astous, «&nbsp;",
							linkAnchor("http://quebec.huffingtonpost.ca/2012/09/20/deontologie-policiere-greve-etudiante_n_1901539.html", "46% des plaintes contre les policiers rejetées&nbsp;"),
							"»,",
							em(" Le Huffington Post Québec, 20 septembre 2012. ")
						)
					),
					". Ce même mois, alors que l’année n’était même pas terminée, on notait une augmentation de 14% des plaintes comparativement à l’année précédente",
					renvoi(
						$notes,
						array(
							"Annie Mathieu, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/le-soleil/actualites/justice-et-faits-divers/201209/11/01-4573147-conflit-etudiant-pres-de-200-plaintes-en-deontologie-policiere.php", "Conflit étudiant: près de 200 plaintes en déontologie policière"),
							"&nbsp;», ",
							em("Le Soleil, 11 septembre 2012.")
						)
					),
					"."
				)
			),
			paragraph(
				array(
					"À un niveau plus systémique, on doit s’interroger sur les techniques policières de contrôle de foule, déjà dénoncées par le ",
					em("Comité contre la torture"),
					" de l’ONU en 2005 et en 2012",
					renvoi(
						$notes,
						array(
							"Voir ",
							em("supra notes 7 et 14 et texte correspondant.")
						)
					),
					". Un tel niveau de force et l’utilisation d’armes à ",
					em("létalité réduite"),
					" est-il vraiment nécessaire&nbsp;? Plusieurs groupes, dont ",
					em("Amnistie Internationale"),
					", en doutent",
					renvoi(
						$notes,
						array(
							"Amnistie internationale Canada francophone, «&nbsp;",
							linkAnchor("http://amnistie.ca/site/index.php?option=com_content&amp;view=article&amp;id=17539:conflit-etudiant--amnistie-internationale-canada-francophone-est-serieusement-preoccupee-par-les-atteintes-au-droit-de-manifester-pacifiquement-&amp;catid=27:communiqulocaux&amp;Itemid=73", "Conflit étudiant&nbsp;: Amnistie internationale Canada francophone est sérieusement préoccupée par les atteintes au droit de manifester pacifiquement&nbsp;"),
							"», 23 avril 2012. "
						)
					),
					"."
				)
			),
			image(
				"images/fromPDF/normes.jpeg",
				"Policiers procédant à une arrestation",
				null,
				"Photo © Darren Ell 2012"
			),
			notes($notes)
		)
	)
);
$arrestations = array(
	section(
		$toc,
		array(
			sectionTitle($toc,"Les arrestations"),
			paragraph("De nombreux témoignages font état d’arrestations illégales, non fondées, abusives et souvent brutales. La majorité d’entre elles ont eu lieu dans le cadre de manifestations et d’actions de perturbation (avant, pendant ou après celles-ci), mais plusieurs sont survenues à l’occasion d’activités quotidiennes ordinaires, sur la rue, à la sortie des bars, dans le métro ou ailleurs. Selon notre bilan, le nombre d’arrestations effectuées entre le 16 février et le 3 septembre 2012 s’élève à 3 509. Nous analyserons d’abord les arrestations individuelles, puis celles de masse."),
			chapterTitle($toc, "Les arrestations individuelles"),
			blockquote(
				array(
					paragraph("Je n’ai pas obtempéré dans la seconde à l’ordre de se disperser. Ils m’ont arrêté, insulté et transporté à un poste de police. Ils m’ont remis un constat d’infraction de 434$ pour avoir émis un bruit audible.&nbsp;J’estime avoir été victime de profilage politique."),
					cite("Un manifestant arrêté le 14 mai 2012")
				)
			),
			paragraph("En plus des arrestations de masse, il y a eu de nombreuses arrestations d’une seule ou de quelques personnes à la fois, tant dans l’espace public que dans l’espace privé. La majorité des témoignages portent sur des événements survenus à Montréal, mais aussi à Sherbrooke, à Québec, à Longueuil, à Victoriaville et à Gatineau entre autres. Les récits sont très variés mais il est possible de dégager des constantes : omission d’informer des motifs de l’arrestation, propos méprisants ou injurieux tenus par les policiÈres, usage excessif de la force, menottes trop serrées, non accès à l’eau, aux toilettes et aux soins médicaux, durée excessive de la détention, libération sans accusation ou souvent avec des accusations farfelues ou démesurées."),
			
			chapterTitle($toc, "Les individus particulièrement ciblés"),
			paragraph("Certains types d’individus semblent avoir été systématiquement ciblés, notamment les journalistes indépendantEs et les personnes qui filmaient ou prenaient des photos. CertainEs journalistes ont été accuséEs d’entrave au travail des policiÈres, et quelques-unEs affirment que leurs appareils ont été saisis et leur contenu effacé. Des journalistes de CUTV ont été harceléEs, battuEs, arrêtéEs, sans considération pour leur statut de journaliste. L’un d’eux a été menacé de poursuite pour incitation à émeute. Une autre journaliste dit avoir été la cible constante d’intimidation dans les manifestations. Elle a été arrêtée et a écopé d’une amende alors qu’elle ne faisait que prendre des photos des policiÈres."),
			paragraph("D’autres personnes spécifiquement ciblées sont celles qui portaient des masques, des foulards, des sacs à dos, des carrés rouges ou des vêtements noirs. L’une d’elles a été arrêtée sous prétexte qu’elle avait «&nbsp;des vêtements de gens qui commettent des actes criminels&nbsp;». Des militantEs connuEs des policiÈres pour leur participation assidue aux manifestations ont subi diverses formes de harcèlement et ont été arrêtéEs dans des circonstances anodines. Plusieurs allèguent que les policiÈres proféraient des menaces à leur endroit, telles que «&nbsp;c’est ta dernière manifestation&nbsp;», «&nbsp;on a un ticket pour toi&nbsp;», «&nbsp;si vous essayez de trouver votre ami, j’envoie des agents vous arrêter pour flânage&nbsp;» ou «&nbsp;si tu fais une plainte tu vas le regretter&nbsp;»."),
			paragraph("Une femme, fréquemment suivie durant les manifestations et harcelée par les policiÈres qui l’appelaient par son prénom, a reçu plus de dix constats pour des infractions diverses comme cracher par terre, traverser au feu rouge, marcher dans la rue. Elle raconte que les policiÈres l’insultaient, faisant des remarques sur sa vie privée et des commentaires sexistes. Une autre personne a été suivie après une manifestation nocturne, appelée par son prénom par les policiÈres, battue et menacée d’accusations criminelles dans le cas où elle porterait plainte. Elle a été détenue durant quinze heures, pour finalement être relâchée sans accusation."),
			paragraph("Plusieurs manifestantEs connuEs des policiÈres témoignent avoir reçu des constats d’infraction pour des raisons douteuses telles que refus de circuler, cracher par terre, avoir échappé un mouchoir par terre (un policier a même dit que ce constat visait à décourager de manifester), défectuosité d’un réflecteur de vélo (pourtant en parfaite condition). D’autres disent avoir été arrêtéEs ou harceléEs parce qu’ils ou elles étaient connus par les policiÈres comme étant des gens qui portent plainte en déontologie ou susceptibles de le faire."),
			
			chapterTitle($toc, "Arrestations de passantEs, de touristes ou autres"),
			paragraph("De simples passantEs, propriétaires de commerce ou touristes ont été arrêtéEs, dont plusieurs à la sortie de bars ou de restaurants. Un propriétaire de restaurant a été arrêté, menotté et détenu pendant six heures pour avoir fait sortir ses clientEs par l’arrière de son commerce. Les policiÈres, dont les numéros de matricule étaient dissimulés, menaçaient d’embarquer les clientEs qui filmaient la scène. Le propriétaire n’a finalement jamais été accusé de quoi que ce soit. "),
		
			chapterTitle($toc, "Le comportement des policiÈres lors des arrestations"),
			paragraph("Dans la plupart des cas, aucune lecture des droits n’a été faite au moment de l’arrestation. Les témoins disent de façon quasi unanime que leurs demandes d’explications, de contacter unE avocatE, de desserrer leurs menottes, d’obtenir de l’eau ou des médicaments, étaient ridiculisées ou ignorées par les policiÈres. Plusieurs ont fait part de violence verbale et physique. Enfin, on note même une personne qui a été menacée par un policier avec une arme à feu au visage, puis accusée elle-même d’agression armée."),
			paragraph("Certaines arrestations brutales ou abusives n’ont pas été couronnées d’accusations. Un témoin raconte que des policiers l’ont surpris en train d’uriner dans une ruelle. Plutôt que de lui remettre une contravention, ils l’ont violemment battu et insulté, pour ensuite le libérer sans explication."),
			paragraph("Finalement, voici quelques exemples d’arrestations pour motifs fallacieux ou loufoques&nbsp;:"),
			bulletList(
				array(
					listItem("Une personne qui quittait une manifestation a été arrêtée pour consommation d’alcool sur la voie publique. Elle a nié fermement et a demandé de passer l’alcootest, ce qui lui a été refusé."),
					listItem("Une personne a été détenue et accusée de possession simple de drogue, alors qu&apos;elle avait une exemption de Santé Canada de possession de la marijuana pour raison médicale. Les policiÈres ont refusé de lire sa prescription."),
					listItem("Une autre, envoyant la main à un véhicule anti-émeute, a reçu un constat d&apos;infraction pour avoir traversé à un feu rouge."),
					listItem("Une journaliste a été accusée de menace de mort pour avoir pointé le doigt en direction d&apos;un policier. Cette accusation a été abandonnée en avril 2013, la poursuite n&apos;ayant pas de preuve à offrir."),
					listItem("Une personne s’est vu remettre un constat d’infraction parce qu&apos;elle était en patins à roulettes dans la rue, d&apos;autres pour avoir marché dans la rue, et d’autres encore pour l’avoir traversée en diagonale durant une manifestation de nuit."),
					listItem("Une personne qui assistait à l&apos;interpellation d&apos;une amie a été arrêtée pour avoir touché le bras du policier alors qu&apos;elle voulait lui demander ce qui se passait. Elle a été inculpée de voies de fait sur un policier."),
					listItem("Une personne a été arrêtée et accusée de voie de faits sur un agent de la paix et d&apos;entrave au travail des policiÈres, après avoir tenté d&apos;empêcher de tomber un jeune homme qui se faisait assaillir par plusieurs policiÈres."),
					listItem("Une personne s&apos;approchant de son amie qui se faisait arrêter lors de la rentrée à l&apos;Université de Montréal a été reconnue par les policiÈres et immédiatement arrêtée sans motif."),
					listItem("Une personne a été arrêtée et accusée de voies de fait sur un policier pour avoir lancé des confettis."),
					listItem("Après avoir été témoin de l&apos;arrestation d&apos;une amie, une personne qui marchait sur une rue piétonnière s&apos;est fait interpeller, menotter, frapper contre un mur et fouiller violemment au point de déchirer ses pantalons. Après hésitation, les policiers lui ont remis un constat pour ne pas avoir eu de réflecteur sur son vélo, ce qui était faux."),
					listItem("Une personne réfugiée sous le toit de l’entrée du quartier général du SPVM parce qu&apos;il pleuvait a été arrêtée, puis libérée sous condition de ne plus manifester."),
					listItem("Une personne a été accusée de voies de fait contre un policier, pour avoir échappé de l&apos;eau sur une auto-patrouille.")
				)
			),
			subsectionTitle($toc,"Les arrestations de masse"),
			blockquote(
				array(
					paragraph("J’ai quitté la manifestation alors qu’elle venait d’être déclarée illégale. Les policiÈres ont surgi et m’ont encerclé avec une trentaine de personnes. On a été menottéEs et emmenéEs à  un poste de police, pour être relâchéEs six heures plus tard avec un constat d’infraction pour attroupement illégal."),
					cite("Un manifestant lors d’une manifestation nocturne")
				)
			),
			paragraph(
				array(
					"La méthode d’arrestations de masse par encerclement a été largement utilisée par les services policiers au cours du printemps et de l’été 2012 et ce, un peu partout au Québec. Selon les informations que nous avons compilées, il y a eu entre le 15 mars et le 2 août 2012 au moins trente-et-un épisodes d’arrestations de masse, dont dix-neuf à Montréal, quatre à Québec, deux à Gatineau et cinq à Sherbrooke",
					renvoi(
						$notes,
						array(
							"Voir annexe 2 pour le détail des arrestations de masse."
						)
					),
					". Au total, ce ne sont pas moins de 2 913 personnes qui ont été arrêtées lors de ces interventions policières."
				)
			),
			paragraph("Les témoignages recueillis brossent un portrait assez uniforme du déroulement de ces arrestations massives. Celles-ci ont eu lieu lors de rassemblements pacifiques et souvent festifs, parfois troublés par un incident isolé. Dans une forte proportion, les témoins affirment ne pas avoir été informés par les policiÈres de l’illégalité de la manifestation, des interventions à venir ou d’un quelconque ordre de dispersion. Une partie des témoins rapportent qu’à Montréal, les manifestations postérieures à l’entrée en vigueur de la loi spéciale (loi 12) et du règlement municipal P-6, lesquels exigeaient la remise au préalable de l’itinéraire à la police, étaient déclarées «&nbsp;illégales&nbsp;» par le SPVM, mais étaient ensuite tolérées."),
			paragraph("Plusieurs témoins expriment des sentiments de surprise et d’incompréhension face au choix de la police d’intervenir sans avertissement dans un contexte de manifestation pacifique. Pour plusieurs, le manque d’indication claire préalable aux interventions policières ne permettait pas aux manifestantEs de savoir quand quitter les lieux. Au contraire, les témoins racontent que la police anti-émeute intervenait de façon impromptue en sectionnant des manifestations et en encerclant des groupes de 50 à 200 personnes. CertainEs policiÈres ordonnaient la dispersion en frappant sur leur bouclier et en criant à l’unisson «&nbsp;Bouge !&nbsp;», alors que des collègues bloquaient toutes les issues permettant de quitter les lieux. "),
			paragraph("Ces opérations de souricières étaient menées avec usage de gaz lacrymogène, de poivre de Cayenne, de boucliers, de matraques, de balles de plastique ou de grenades assourdissantes. Plusieurs témoins rapportent que, lors de ces arrestations de masses, il y a eu usage excessif de la force par la police alors même que les manifestantEs étaient pacifiques. Selon plusieurs témoignages, le numéro de matricule de certainEs policiÈres impliquéEs dans ces opérations d’arrestations de masse n’était pas visible."),
			paragraph("Ainsi encercléEs, les manifestantEs étaient détenuEs sur place pendant une période allant de trente minutes à deux heures pour ensuite être fouilléEs, menottéEs avec des attaches de plastique et emmenéEs au poste de police. "),
			blockquote(
				array(
					paragraph("Les garçons ont été amenés dans l’autobus en premier, ce qui leur permettait d’être au chaud plus rapidement,  car il faisait très froid. […] J’ai eu les lèvres bleues, je ne savais pas quand ça allait finir, j’ai eu peur de l’hypothermie."),
					cite("Une manifestante arrêtée à Québec lors de la manifestation féministe contre la hausse,  le 27 avril 2012")
				)
			),
			paragraph(
				array(
					"ArrivéEs au poste, ils et elles attendaient de longues périodes avant d’être interrogéEs, puis photographiéEs pour identification. Plusieurs questions récurrentes des policiÈres portaient sur des éléments dont la divulgation n’est pas obligatoire, comme par exemple le numéro de téléphone cellulaire, l’établissement d’enseignement fréquenté et l’association étudiante de rattachement. Finalement, on leur enlevait les menottes et on leur remettait un constat d’infraction, le plus souvent à un règlement municipal ou au ",
					em("Code de la sécurité routière"),
					". Ainsi, la période de détention totale, avec menottes et sans accès à l’eau et aux toilettes, variait de trois à six heures."
				)
			),
			paragraph("Quand les personnes arrêtées n’étaient pas amenées dans un poste de police, elles étaient relâchées aux quatre coins de la ville, de façon aléatoire et souvent alors qu’il n’y avait plus de transport en commun."),
			image(
				"images/fromPDF/arrestationsMassives.jpeg",
				"Arrestations massives à l'Université du Québec en Outaouais",
				null,
				"Photo © Sylvie Béland 2012"
			),
			aside(
				array(
					chapterTitle($toc, 
						array(
							"Deux exemples d’arrestations massives à l’UQO",
							renvoi(
								$notes,
								array(
									"Ottawa Citizen, «&nbsp;",
									linkAnchor("http://www.ottawacitizen.com/news/Photos+Quebec+students+continue+protest+against+proposed+tuition/6486180/story.html#ixzz2PPQeU3V0", "Photos: Quebec students continue protest against proposed tuition increase"),
									"&nbsp;», 8 mai 2012."
								)
							)
						)
					),
					paragraph(
						array(
							"La Cour supérieure a obligé par injonction l’Université du Québec en Outaouais (UQO) à reprendre l’ensemble des cours dès le 16 avril 2012. Le jugement interdisait également toute manifestation à moins de 25 mètres des deux pavillons universitaires. Les premiers jours de cette reprise ont été marqués par deux épisodes d’arrestations massives ainsi que par des scènes de brutalité policière. Le 18 avril 2012, 161 personnes ont été arrêtées pour une présumée violation de l’article 500.1 du ",
							em("Code de la sécurité routière"),
							"."
						)
					),
					paragraph("Selon le témoignage d’un manifestant, le groupe a été encerclé en souricière pendant près d’une heure, alors qu’aucun avis de dispersion n’avait été émis par la police. Ils et elles ont été fouilléEs et détenuEs dans des autobus sans avoir accès à des toilettes, avant d’être amenéEs aux postes de police de la région. Au total 220 personnes auront reçu un constat d’infraction pour des gestes allégués le 18 avril 2012. La plupart l’ont reçu sur place, les autres l’ont reçu quelques mois plus tard. Les policiÈres ont refusé de donner leur numéro de matricule. Un deuxième manifestant dit avoir été «&nbsp;victime de profilage&nbsp;» car un représentant syndical arrêté dans la souricière a été libéré sans contravention."),
					paragraph(
						array(
							"Le 19 avril 2012, au moins un manifestant a été victime de lacérations à la tête après avoir reçu des coups de matraque. Environ 150 manifestantEs ont occupé pacifiquement la cafétéria d’un pavillon de l’UQO",
							renvoi(
								$notes,
								array(
									"Radio-Canada, «&nbsp;",
									linkAnchor("http://www.radio-canada.ca/regions/ottawa/2012/04/19/002-greve-jeudi-autobus.shtml", "Plus de 150 arrestations à l’UQO lors d’une manifestation"),
									"&nbsp;», 19 avril 2012. "
								)
							),
							". Après quelques heures d’occupation, ils et elles ont été arrêtéEs et accuséEs au criminel de méfaits. Un homme âgé d’une soixantaine d’années  qui a tenté de s’interposer à l’arrestation musclée d’une manifestante dit s’être fait matraquer  par un policier. Sa conjointe, qui s’est portée à sa défense, a été jetée par terre. En réaction à ces évènements violents, l’UQO a annulé les cours pendant plusieurs jours. Un autre professeur a été arrêté et accusé d’entrave au travail des policiers alors qu’il tentait d’aller chercher un livre à son bureau. Cette accusation a été abandonnée par la poursuite  en septembre 2012."
						)
					)
				)
			),
			subsectionTitle($toc,"Les faits en regard du droit"),
			paragraph(
				array(
					"La participation à des manifestations pacifiques est une forme d’expression qui bénéficie de la protection constitutionnelle prévue aux articles 2 b) et 2 c) de la ",
					em("Charte canadienne"),
					renvoi(
						$notes,
						array(
							linkAnchor("http://laws-lois.justice.gc.ca/fra/Const/page-15.html", "Charte canadienne des droits et libertés"),
							", partie I de la Loi constitutionnelle de1982 [annexe B de la Loi de 1982 sur le Canada (1982, R.-U., c. 11)]."
						)
					),
					", à l’article 3 de la ",
					em("Charte québécoise"),
					renvoi(
						$notes,
						array(
							linkAnchor("http://www2.publicationsduquebec.gouv.qc.ca/dynamicSearch/telecharge.php?type=2&amp;file=/C_12/C12.HTM", "Charte des droits et libertés de la personne"),
							", L.R.Q. c. C.-12."
						)
					),
					" et aux articles 19 et 21 du ",
					em("Pacte international relatif aux droits civils et politiques"),
					renvoi(
						$notes,
						array(
							"19 décembre 1966, 999 R.T.N.U. 171, R.T. Can. No 47."
						)
					),
					". L’État a l’obligation de protéger la liberté d’expression."
				)
			),
			paragraph("Au cours de la grève étudiante, non seulement les forces de l’ordre n’ont pas rempli leur devoir en respectant la liberté d’expression et de réunion pacifique, mais elles ont au contraire violé ces droits en arrêtant des gens sans fondement légal et en employant diverses mesures répressives à l’endroit des citoyenNEs qui manifestaient pacifiquement. Les forces de l’ordre tentent de justifier leurs actions par des motifs de sécurité. Si la sécurité est un objectif important, les moyens choisis pour atteindre cet objectif, soit les arrestations préventives ou arbitraires et l’usage abusif de la force, ne sont pas justifiés et ne constituent pas une atteinte raisonnable aux droits fondamentaux des manifestantEs."),
			
			chapterTitle($toc, "Le pouvoir général d’arrestation en droit canadien"),
			paragraph(
				array(
					"En vertu de l’article 495 (1) du ",
					em("Code criminel"),
					", unE agentE de la paix peut arrêter sans mandat une personne ayant commis ou étant sur le point de commettre un acte criminel ou encore une personne prise en flagrant délit de commettre  un tel acte. Cette disposition n’autorise en rien les arrestations collectives ou préventives",
					renvoi(
						$notes,
						array(
							"Véronique Robert, «&nbsp;",
							linkAnchor("http://voir.ca/veronique-robert/2012/06/28/%C2%ABau-nom-de-larticle-31-je-vous-arrete%C2%BB/", "Au nom de l’article 31, je vous arrête"),
							"&nbsp;», Voir, 28 juin 2012;  <br />Marie-Ève Sylvestre, «&nbsp;",
							linkAnchor("http://ledevoir.com/societe/actualites-en-societe/352178/les-arrestations-preventives-sont-illegales-et-illegitimes", "Les arrestations préventives sont illégales et illégitimes"),
							"&nbsp;», Le Devoir, 12 juin 2012."
						)
					)
				)
			),
			paragraph("Les arrestations de masse soulèvent de sérieuses préoccupations par rapport au principe de la responsabilité pénale individuelle. Être puni collectivement simplement pour avoir été présent sur les lieux d’une manifestation est fondamentalement injuste. La pratique d’arrestations et de détentions préventives constitue clairement une forme de censure préalable puisqu’elle empêche des individus d’être présents au moment et à proximité des lieux d’une manifestation et d’exprimer leurs opinions. Une telle censure viole leur liberté d’expression et le droit du public de recevoir des informations."),
			paragraph("Les arrestations sans motif sont arbitraires et illégales. Plusieurs personnes ont été arrêtées d’abord et avant tout pour ce qu’elles paraissaient être et non pour ce qu’elles avaient fait. En effet, plusieurs arrestations ont été effectuées non pas en réaction à la commission d’une infraction, mais plutôt en raison de l’apparence, de l’âge, de l’habillement ou des convictions politiques présumées des individus. Il s’agit là de profilage discriminatoire."),
			
			chapterTitle($toc, "Les arrestations et détentions en vertu de règlements municipaux "),
			paragraph(
				array(
					"Les pouvoirs d’arrestations en vertu des règlements municipaux sont plus restreints. Il en est de même des moyens d’identification des personnes arrêtées. L’arrestation et la détention pour des infractions à des règlements municipaux sont inhabituelles puisque «&nbsp;le principe veut que l’infraction soit sanctionnée par la signification d’un constat d’infraction. Les cas d’arrestation formelle sont l’exception&nbsp;»",
					renvoi(
						$notes,
						array(
							"Québec (Ville) c. Gagnon, 2009 CanLII 70620 (QC CM), au para. 57."
						)
					),
					". Les arrestations peuvent être légales lorsqu’elles constituent le seul moyen raisonnable de faire cesser l’infraction",
					renvoi(
						$notes,
						array(
							"Voir l’article 75 du ",
							em("Code de procédure pénale"),
							", L.R.Q., c. 25.1. Voir aussi ",
							em("Montréal (Ville) c. Garofalo"),
							", 2001 CanLII 27042 (QC CM), ",
							em("Khoury c. Dupuis"),
							", 2004 CanLII 9215 (QC CQ); ",
							em("Québec (Ville) c. Gignac"),
							", 2007 CanLII 42938 (QC CM); ",
							em("Québec (Ville) c. Gagnon"),
							", 2009 CanLII 70620 (QC CM)."
						)
					),
					"."
				)
			),
			paragraph(
				array(
					"La détention doit cesser dès qu’elle n’est plus nécessaire pour empêcher la reprise ou la continuation, dans l’immédiat, de l’infraction reprochée. Des périodes de quatre à six heures de détention, fréquentes au printemps dernier, sont donc douteuses dans ce contexte. Comme le souligne la Cour supérieure dans une affaire d’arrestations de masse, il faut se demander chaque fois&nbsp;: «&nbsp;Qu’est-ce qui empêchait alors les policiers de remettre des constats d’infraction et de libérer immédiatement ces personnes ?",
					renvoi(
						$notes,
						array(
							"Kavanaght c. Montréal (Ville de), 2011 CanLII 4830 (QC CS), au para. 138."
						)
					),
					"»."
				)
			),
			paragraph("Dans le contexte du printemps 2012, les policiÈres alléguaient que la détention constituait le seul moyen d’empêcher la poursuite de la manifestation et était nécessaire afin de remettre les constats d’infraction. Plusieurs personnes arrêtées et détenues en vertu des règlements municipaux ont toutefois témoigné que l’intimidation et le désir de réprimande semblaient plutôt avoir été les motivations derrière ces arrestations et détentions indues."),
			paragraph(
				array(
					"Par ailleurs, plusieurs personnes arrêtées en vertu de règlements municipaux ou du ",
					em("Code de sécurité routière"),
					" ont été prises en photo pour fins d’identification. Mentionnons à cet égard que le pouvoir des policiÈres de prendre des photos à cette fin se limite, en vertu de l’article 2 de la ",
					em("Loi sur l’identification des criminels"),
					", aux infractions criminelles",
					renvoi(
						$notes,
						array(
							em("Loi sur l’identification des criminels"),
							" (L.R.C. (1985), ch. I-1)."
						)
					),
					". Les services policiers ont donc outrepassé leurs pouvoirs."
				)
			),
			notes($notes)
		)
	)
);

$chefsAccusation = array(
	section(
		$toc,
		array(
			image(
				"images/fromPDF/chefsAccusation.jpeg",
				"Anarcho-Panda près d'une ligne de policiers",
				null,
				"Photo © Mario Jean / MADOC 2012"
			),
			sectionTitle($toc,"Les chefs d’accusation"),
			subsectionTitle($toc,"En vertu des règlements municipaux"),
			blockquote(
				array(
					paragraph("Le service de police de Sherbrooke a tenté d’intimider des militantEs sous prétexte d’appliquer des règlements municipaux qui, dans le cas qui nous occupe, entrent en contradiction avec nos droits fondamentaux."),
					cite("Une militante menacée de recevoir un constat d’infraction pour avoir «&nbsp;troublé la paix&nbsp;» et «&nbsp;incité les gens à marcher dans la rue&nbsp;»")
				)
			),
			paragraph("Nous dénombrons 1616 contraventions émises en vertu des règlements municipaux de différentes villes du Québec. Les règlements en vertu desquels les manifestantEs ont été judiciariséEs sont majoritairement ceux concernant la paix et l’ordre sur le domaine public, mais selon les témoignages, des contraventions ont également été remises à des manifestantEs pour des raisons aussi variées que saugrenues, telles que «&nbsp;traverser la rue à un feu rouge&nbsp;», «&nbsp;flâner&nbsp;», «&nbsp;cracher&nbsp;», «&nbsp;ne pas cesser un acte après en avoir reçu l’ordre&nbsp;», «&nbsp;étant piéton, en n’empruntant pas le trottoir bordant la chaussée&nbsp;» ou bien «&nbsp;émettre un bruit audible&nbsp;». Les amendes associées à ces constats d’infraction s’élèvent souvent à plusieurs centaines de dollars."),
			paragraph("Selon plusieurs témoignages, les motifs nébuleux derrière les interpellations suggèrent que le but premier était de contrôler l’identité et les déplacements des gens et les empêcher de rejoindre une manifestation. De nombreuses personnes arrêtées rapportent n’avoir pas été informées des raisons de leur arrestation avant la remise de leur constat. Un arrêté a témoigné que même une fois rendu au poste de police, l’inspecteur se demandait encore quelle accusation il pouvait porter contre lui, quel règlement il pourrait utiliser, suggérant du coup l’utilisation arbitraire des règlements municipaux à des fins d’intimidation et de contrôle social des manifestantEs."),
						
			
			chapterTitle($toc, "Les règlements sur la paix et l’ordre à Montréal et Québec"),
			paragraph(
				array(
					"À Montréal, c’est notamment en s’appuyant sur un règlement municipal — le ",
					em("Règlement sur la prévention des troubles de la paix, de la sécurité et de l’ordre publics, et sur l’utilisation du domaine public (P-6)"),
					renvoi(
						$notes,
						array(
							"Ville de Montréal, ",
							linkAnchor("http://ville.montreal.qc.ca/sel/sypre-consultation/afficherpdf?idDoc=23796&amp;typeDoc=1", "Règlement P-6 sur la prévention des troubles de la paix, de la sécurité et de l’ordre publics, et sur l’utilisation du domaine public, 19 mai 2012"),
							"."
						)
					),
					" — ",
					"que les forces de l’ordre ont procédé à plusieurs arrestations de masse. Plusieurs personnes ont reçu des constats d’infraction pour attroupement illégal en vertu de ce règlement. Rappelons que ce règlement, adopté dans sa première mouture en 1969, a fait l’objet d’amendements importants le 19 mai 2012. L’article 2 de ce règlement prescrivait déjà que&nbsp;les assemblées, défilés ou autres attroupements qui mettent en danger la paix, la sécurité ou l’ordre publics sont interdits sur les voies et places publiques, de même que dans les parcs ou autres endroits du domaine public."
				)
			),
			paragraph("Depuis l’introduction, en mai 2012, des amendements comprenant les articles 2.1 et 3.2, il est dorénavant  exigé que le lieu exact et l’itinéraire d’une assemblée, d’un défilé ou d’un attroupement soient préalablement communiqués aux autorités, et il est interdit à toute personne participant à ce type d’activité de porter un masque. En outre, les modifications apportées à l’article 7 du règlement ont eu pour effet de faire passer les amendes de 100$ (minimum) à 500$ (minimum) pour une première infraction."),
			paragraph(
				array(
					"À Québec, le ",
					em("Règlement sur la paix et le bon ordre"),
					renvoi(
						$notes,
						array(
							"Ville de Québec, ",
							linkAnchor("http://reglements.ville.quebec.qc.ca/fr/showdoc/cr/R.V.Q.1091", "Règlement R.V.Q. 1091 sur la paix et le bon ordre"),
							",19 juin 2012."
						)
					),
					" prévoit qu’il est interdit «&nbsp; à une personne de tenir ou de participer à une manifestation illégale sur le domaine public&nbsp;». Une manifestation est illégale si&nbsp;: 1) le Service de police de la Ville de Québec n’a pas été informé de l’heure et du lieu ou de l’itinéraire de la manifestation; 2) l’heure, le lieu ou l’itinéraire n’est pas respecté; 3) des actes de violence ou de vandalisme sont commis (art. 19.2).  En outre, il est interdit de se trouver dans un parc entre 23 heures et 5 heures (art. 19.3), de participer ou d’être présent à un attroupement sur le domaine public entre 23 heures et 5 heures (art. 19.4), et de gêner la circulation sur un trottoir, une place publique ou un passage piétonnier ou de priver les citoyenNEs de l’utilisation normale d’une partie du domaine public (art. 19.5).
					"
				)
			),
			paragraph(
				array(
					"Les articles 19.1",
					renvoi(
						$notes,
						array(
							"L’article 19.1 prévoit notamment qu’il est interdit d’ériger des constructions ou de faire des feux sur le domaine public."
						)
					),
					" à 19.5 ont été adoptés en juin 2012, dans une séance extraordinaire du Conseil de ville, juste avant la St-Jean-Baptiste et la mobilisation étudiante du 22 juin.  Mentionnons que divers groupes de défense des droits, notamment la ",
					em("Ligue des droits et libertés"),
					", section Québec, ainsi que le ",
					em(
						array(
							"Regroupement d’aide aux Itinérants et Itinérantes du Québec (",
							acronym("RAIIQ", "Regroupement d’aide aux Itinérants et Itinérantes du Québec")
						)
					),
					", ont fait part de leur inquiétude quant aux effets de ces nouvelles dispositions sur l’exercice de la liberté d’expression et sur les conditions de vie des personnes en situation d’itinérance",
					renvoi(
						$notes,
						array(
							"LDLQc et RAIIQ, «&nbsp;",
							linkAnchor("http://liguedesdroitsqc.org/2012/05/lettre_ldlqc_raiiq_18mai12/", "Les modifications à la réglementation municipale auront des effets néfastes sur les personnes en situation d’itinérance"),
							"&nbsp;», 18 mai 2012. "
						)
					),
					"."
				)
			),
			paragraph(
				array(
					"Un des problèmes avec de telles dispositions règlementaires",
					renvoi(
						$notes,
						array(
							"Des règlements municipaux concernant l’ordre et la paix publics existent dans plusieurs villes, notamment Gatineau (Ville de Gatineau, ",
							linkAnchor("http://www.gatineau.ca/servicesenligne/doc-web/masson/documents/pdf/42-2003.pdf", "Règlement 42-2003 concernant le maintien de la paix publique et du bon ordre sur le territoire de la Ville de Gatineau"),
							", 10 juillet 2003) et  Sherbrooke (Ville de Sherbrooke, «&nbsp;Titre 5 – Protection de la personne et de la propriété, Chapitre 6 – Ordre et paix publique&nbsp;» du ",
							linkAnchor("http://www.ville.sherbrooke.qc.ca/fileadmin/fichiers/Juridiques/reglements/reglement1/protection-ordreetpaix_2013.pdf", "Règlement no 1 – Règlement général de la Ville de Sherbrooke"),
							", 25 mai 2012). Il semble toutefois que l’article 500.1 du Code de sécurité routière ait majoritairement été utilisé pour pénaliser les manifestantEs dans ces villes."
						)
					),
					" c’est qu’elles ne donnent pas de directives claires quant à leur application. À quel moment certains attroupements mettent-ils «&nbsp;en danger&nbsp;» la paix, la sécurité ou l’ordre public? Dès qu’une infraction au règlement est constatée, l’assemblée, le défilé ou l’attroupement est en théorie considéré illégal et les participantEs sont passibles d’une amende.  Ainsi, une manifestation peut être considérée illégale avant même son début si l’itinéraire n’a pas été fourni aux autorités. Ces règlements confient donc aux forces de l’ordre le pouvoir totalement discrétionnaire de décider où, quand et comment, pourra s’exercer le droit de manifester. Un représentant de la Ville de Montréal a même déclaré qu’une manifestation pouvait être en contravention avec le règlement (dans le cas notamment où l’itinéraire n’aurait pas été fourni) sans nécessairement que les agentEs du SPVM n’en aient ordonné la dispersion",
					renvoi(
						$notes,
						array(
							"Villeneuve c. Montréal (Ville de), 2012 QCCS 2861."
						)
					),
					". "
				)
			),
			paragraph(
				array(
					"Avant l’adoption, par la Ville de Montréal, des amendements au règlement P-6, plusieurs organisations de défense des droits et libertés avaient exprimé leurs préoccupations quant à l’ampleur de ce pouvoir discrétionnaire. L’",
					em("Association canadienne des libertés civiles"),
					renvoi(
						$notes,
						array(
							"Association canadienne des libertés civiles, ",
							linkAnchor("http://ccla.org/wordpress/wp-content/uploads/2012/05/Letter-FR-to-Mayor-Tremblay.pdf", "Lettre au maire de Montréal Gérald Tremblay"),
							", 15 mai 2012."
						)
					),
					", la ",
					em("Ligue des droits et libertés"),
					renvoi(
						$notes,
						array(
							"Ligue des droits et libertés, «&nbsp;",
							linkAnchor("http://liguedesdroits.ca/wp-content/fichiers/ville-mtl-memoire-ldl-sur-les-manifestations.doc", "Masques, permis et liberté d’expression à Montréal"),
							"&nbsp;», Position de la Ligue des droits et libertés&nbsp;soumise au Comité de la Sécurité publique de la Ville de Montréal, 10 Avril 2012."
						)
					),
					" et le ",
					em("Barreau du Québec"),
					renvoi(
						$notes,
						array(
							"Barreau du Québec, ",
							linkAnchor("http://www.barreau.qc.ca/export/sites/newsite/pdf/medias/positions/2012/20120516-masques.pdf", "Lettre à M. Claude Trudel, président de la Commission de la sécurité publique"),
							", 16 mai 2012."
						)
					),
					" ont tous trois souligné le caractère vague et large des termes utilisés, laissant potentiellement place à un usage abusif et discriminatoire. Ceux-ci ont évalué que l’exigence de donner à l’avance l’itinéraire d’une manifestation aux forces de l’ordre était une atteinte trop grande aux droits et libertés (notamment la liberté de réunion pacifique) qui ne pouvait se justifier dans une société libre et démocratique. Quant à l’interdiction du port du masque, les organisations ont également souligné que le droit à l’anonymat était partie intégrante de la liberté d’expression, de la liberté d’association et du droit à la vie privée et que le port du masque ne pouvait être un déterminant d’une intention coupable de commettre une infraction.  Une disposition similaire, qui était en vigueur dans la Ville de Québec depuis 150 ans, a été déclarée inopposable pour des motifs d’atteinte à la liberté d’expression en 2005",
					renvoi(
						$notes,
						array(
							linkAnchor("http://www.canlii.org/fr/qc/qccs/doc/2005/2005canlii100/2005canlii100.html", "Québec (Ville) c. Tremblay"),
							", 2005 CanLII 100 (QC CS)."
						)
					),
					". L’",
					em("Association des juristes progressistes"),
					" a pour sa part argumenté que le règlement P-6, à certains égards plus restrictifs que la loi 12, est utilisé à mauvais escient par le SPVM pour «&nbsp;dissuader les gens de manifester&nbsp;»",
					renvoi(
						$notes,
						array(
							"Association des juristes progressistes, «&nbsp;",
							linkAnchor("http://ajpquebec.org/?p=468", "La liberté de manifester existe. Le P-6, par contre, ne devrait pas"),
							"&nbsp;», mars 2013, p.6."
						)
					),
					". Notons que la validité constitutionnelle des amendements récents au règlement P-6 est présentement attaquée devant les tribunaux",
					renvoi(
						$notes,
						array(
							"Brian Myles, «&nbsp;",
							linkAnchor("http://www.ledevoir.com/societe/justice/351762/anarchopanda-en-cour", "Anarchopanda en cour"),
							"&nbsp;», Le Devoir, 6 juin 2012."
						)
					),
					". La cause devrait être entendue sur le fond par la Cour supérieure en octobre 2013."
				)
			),
			paragraph(
				array(
					"L’utilisation du ",
					em("Règlement P-6"),
					" a été faite de façon sélective par le SPVM. Plusieurs manifestations ont été déclarées «&nbsp;illégales&nbsp;» dès le départ et ont pu avoir lieu car «&nbsp;tolérées&nbsp;» par le SPVM.  Dans d’autres cas par contre, comme le 23 mai 2012, au coin des rues St-Denis et Sherbrooke à Montréal, environ 500 personnes ont reçu un constat d’infraction et une amende de 634$ pour attroupement illégal en vertu de ce règlement. Selon plusieurs témoignages, les forces policières ont encerclé la manifestation sans crier gare et sans possibilité pour les manifestantEs de quitter les lieux une fois la manifestation déclarée illégale. Les arrêtéEs ont été détenuEs pendant de longues heures, soit environ de 23h30 à 5h00 du matin. Les détenuEs n’avaient aucune possibilité de boire de l’eau ou d’aller aux toilettes (ils et elles étaient forcéEs d’uriner dans les bouches d’égout, devant tout le monde!) et certainEs ont rapporté avoir été privéEs d’accès à leurs médicaments. Plusieurs ont témoigné ne pas avoir su le motif de leur arrestation jusqu’à la remise du constat au poste de police. Les personnes ont été menottées et identifiées une à une avant d’être embarquées dans un autobus de la STM. CertainEs ont également rapporté avoir été relâchéEs sans savoir comment rentrer chez eux. Plusieurs manifestantEs ont déploré l’attitude méprisante et humiliante des policiÈres à leur endroit."
				)
			),
			chapterTitle($toc, "De l’utilisation d’autres règlements municipaux pour judiciariser les manifestantEs"),
			paragraph(
				array(
					"L’utilisation des règlements municipaux autres que celui régissant les attroupements illégaux a aussi été rapportée durant le printemps érable. À l’instar des personnes itinérantes qui sont victimes d’une application discriminatoire et disproportionnée des règlements municipaux à des fins de contrôle de leur présence dans l’espace public — comme l’a souligné la ",
					em("Commission des droits de la personne et des droits de la jeunesse"),
					" dans un rapport paru en novembre 2009",
					renvoi(
						$notes,
						array(
							"Christine Campbell et Paul Eid, La judiciarisation des personnes itinérantes à Montréal : Un profilage social, Montréal: Commission des droits de la personne et des droits de la jeunesse, 2009."
						)
					),
					" — on constate que les manifestantEs sont sujetEs à une application discriminatoire des règlements municipaux dans le but, semble-t-il, de les intimider et de les dissuader de porter leurs opinions politiques dans l’espace public.Ainsi, certaines personnes ont témoigné avoir reçu des constats d’infraction à Montréal pour avoir traversé à un feu rouge, pour flânage, pour avoir «&nbsp;émis un bruit audible&nbsp;». Elles disent s’être senties spécifiquement visées par les forces de l’ordre. À Longueuil, quelques personnes portant le carré rouge se sont fait remettre un constat pour présence dans un parc après 23h00. Pourtant, d’autres hommes, plus vieux, se trouvaient là également et n’ont pas été appréhendés par la police dans ce parc où  la tolérance des gens jusqu’à la fermeture des bars est chose très courante."
				)
			),
						
			chapterTitle($toc, "En vertu du Code de la sécurité routière "),
			paragraph(
				array(
					"L’article 500.1 du ",
					em("Code de la sécurité routière"),
					" se lit ainsi : «&nbsp;Nul ne peut, au cours d’une action concertée destinée à entraver de quelque manière la circulation des véhicules routiers sur un chemin public, en occuper la chaussée, [...] de manière à entraver la circulation des véhicules routiers sur ce chemin ou l’accès à un tel chemin&nbsp;». Le troisième paragraphe précise que l’article ne s’applique pas «&nbsp;lors de défilés ou d’autres manifestations préalablement autorisées&nbsp;»."
				)
			),
			paragraph("Et pourtant, quelques 817 accusations ont été portées en vertu de cette disposition et, selon les témoignages reçus, plusieurs corps de police, dont ceux de Montréal, de Québec et de Gatineau, ont menacé d’appliquer cet article si les manifestantEs continuaient à marcher dans la rue. "),
			paragraph(
				array(
					"Le 27 avril 2012, à Québec, les policiÈres ont procédé, dix minutes après le départ d’une manifestation féministe, à l’arrestation par encerclement de 80 manifestantEs qui ont tous et toutes reçu des constats d’infraction en vertu du ",
					em("Code de la sécurité routière"),
					". La ",
					em("Ligue des droits et libertés"),
					", section Québec, a d’ailleurs déposé une plainte à la ",
					em("Commission des droits de la personne et des droits de la jeunesse"),
					" pour atteinte à la liberté d’expression et discrimination fondée sur les convictions politiques",
					renvoi(
						$notes,
						array(
							"Ligue des droits et libertés, section Québec, «&nbsp;",
							linkAnchor("http://liguedesdroitsqc.org/2012/10/plainte_cdpdj/", "La LDL-Qc interpelle la Commission des droits de la personne quant au respect de la liberté d’expression des manifestant(e)s étudiant(e)s"),
							"&nbsp;», 26 octobre 2012. "
						)
					),
					".  La plainte, déposée au nom de 37 personnes arrêtées cette journée, a récemment été jugée recevable par la ",
					em("Commission.")
				)
			),
			paragraph(
				array(
					"Dans son texte ",
					em("De la route à la rue: histoire politique d’un instrument de répression policière"),
					", le documentariste indépendant Moïse Marcoux-Chabot rapporte que, depuis son adoption en 2000, cette disposition n’avait jamais été utilisée avant la manifestation contre la brutalité policière de mars 2011. L’auteur rappelle par ailleurs que des centaines de contraventions pour violation de l’article 500.1 du ",
					em("Code de la sécurité routière"),
					" ont été remises tant pour des blocages de pont ou d’autoroute que pour des participations à des manifestations pacifiques dans les rues de Gatineau",
					renvoi(
						$notes,
						array(
							"Louis-Denis Ébacher, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/le-droit/actualites/education/201204/18/01-4516478-la-guerre-des-nerfs-continue-a-luqo.php", "La guerre des nerfs continue à l’UQO&nbsp;"),
							"», Le Droit, 18 avril 2012.  "
						)
					),
					", Québec",
					renvoi(
						$notes,
						array(
							"Annie Mathieu, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/le-soleil/actualites/education/201204/19/01-4517037-manifestation-au-cegep-limoilou-49-arrestations.php", "Manifestation au Cégep Limoilou: 49 arrestations&nbsp;"),
							"», Le Soleil, 19 avril 2012; Ian Bussières, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/le-soleil/actualites/justice-et-faits-divers/201204/27/01-4519780-manifs-a-quebec-81-arrestations-en-apres-midi-le-calme-en-soiree.php", "Manifs à Québec: 81 arrestations en après-midi, le calme en soirée&nbsp;"),
							"», Le Soleil, 27 avril 2012."
						)
					),
					" et Sherbrooke",
					renvoi(
						$notes,
						array(
							"Claude Plante, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/la-tribune/faits-divers/201205/24/01-4528268-la-police-de-sherbrooke-napplique-pas-la-loi-78.php", "La police de Sherbrooke n’applique pas la loi 78&nbsp;"),
							"», La Tribune, 24 mai 2012. "
						)
					),
					". L’auteur écrit&nbsp;:",
					blockquote(
						array(
							paragraph(
								array(
									"Alors que le texte légal proscrit les actions concertées sur un chemin public visant à entraver la circulation, il a été utilisé à l’occasion pour interpeler une seule personne, 37 marcheurs terminant leur manifestation sur le trottoir, une Banane Rebelle ayant pris l’initiative de s’étendre en travers de la rue et même un groupe démontrant son appui aux représentants étudiants sur le terrain de la Banque Nationale à Québec, à la sortie de la journée de négociations du 28 mai. Lorsqu’Amir Khadir s’est joint à une manifestation nocturne à Québec et a terminé la soirée menotté en compagnie de 62 autres citoyens, on l’accusait de la même infraction",
									renvoi(
										$notes,
										array(
											"Moïse Marcoux-Chabot, «&nbsp;",
											linkAnchor("http://moisemarcouxchabot.com/2012/08/22/de-la-route-a-la-rue-histoire-politique-dun-instrument-de-repression-policiere/", "De la route à la rue: histoire politique d’un instrument de répression policière&nbsp;"),
											"», 22 août 2012."
										)
									),
									"."
								)
							)
						)
					)
				)
			),
			paragraph(
				array(
					"Il dénonce l’incohérence du pouvoir discrétionnaire des policiÈres puisque des centaines de manifestations se sont déroulées dans des conditions semblables sans donner lieu à l’application de cette disposition. Dans certains cas, les corps policiers ont invoqué la loi spéciale pour justifier leur intervention, puis se sont ravisés en disant que les manifestantEs avaient contrevenu au ",
					em("Code de la sécurité routière"),
					". Çe fût le cas notamment à Sherbrooke le 21 mai",
					renvoi(
						$notes,
						array(
							"Claude Plante, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/la-tribune/faits-divers/201205/24/01-4528268-la-police-de-sherbrooke-napplique-pas-la-loi-78.php", "La police de Sherbrooke n’applique pas la loi 78&nbsp;"),
							"», La Tribune, 24 mai 2012."
						)
					),
					" et à Québec, le 24 mai.",
					renvoi(
						$notes,
						array(
							"Radio-Canada, «&nbsp;",
							linkAnchor("http://www.radio-canada.ca/regions/Quebec/2012/05/24/001-arrestation-manifestation-nocturne.shtml", "176 manifestants arrêtés à Québec : des constats d’infraction de 496 $&nbsp;"),
							"», 24 mai 2012. "
						)
					),
				)
			),
			paragraph(
				array(
					"L’utilisation par les forces de l’ordre de cette disposition du ",
					em("Code de la sécurité routière"),
					" lors de manifestations populaires dans les villes de la province constitue, à notre avis, un détournement de la fonction de cette règle. "
				)
			),
			paragraph("En effet, cette infraction exige la présence d’une action concertée, ce qui est le cas lors d’une manifestation, mais destinée à entraver la circulation, à occuper la chaussée. Une simple manifestation dans les rues d’une ville ne vise pas à entraver la circulation des véhicules routiers ou bloquer l’accès à des chemins aux véhicules, mais à sensibiliser la population et les décideurs à un message politique ou à exprimer sa dissidence. La manifestation classique, marcher en scandant des slogans, en portant des pancartes, en tapant sur des casseroles, est très différente des actions de blocage de route ou d’occupations de ponts pour lesquelles l’article 500.1 a été adopté."),
			paragraph(
				array(
					"À la lecture des débats parlementaires ayant précédé l’adoption de cette disposition en juin 2000, il apparaît clair que le but du législateur était de s’attaquer au problème du blocage des routes (en l’occurrence par des camionneurs) susceptible de mettre en péril la santé et la sécurité de la population, de rendre l’approvisionnement des régions impossible, de nuire à leur développement économique. Lors de l’adoption du principe, M. Guy Chevrette disait que «&nbsp;c’est véritablement pour contrer des actions concertées qui mettent en jeu possiblement même l’alimentation de toute une région ou encore une économie régionale qui pourrait être fortement affectée&nbsp;»",
					renvoi(
						$notes,
						array(
							"Journal des débats de l’Assemblée nationale, vol. 36, no. 110, 23 mai 2000."
						)
					),
					"."
				)
			),
			paragraph(
				array(
					"La constitutionnalité de cette disposition est attaquée devant les tribunaux. À cet effet, la ",
					em("Ligue des droits et libertés"),
					", représentée par des procureures membres de l’",
					em("Association des juristes progressistes"),
					", a obtenu l’autorisation d’intervention dans le dossier devant la Cour municipale de Montréal",
					renvoi(
						$notes,
						array(
							"Alami et al. et la Ligue des droits et libertés c. Ville de Montréal, Cour municipale de Montréal, no 779-904-36."
						)
					),
					" dans le but de soutenir que cette infraction porte atteinte aux libertés d’expression et de réunion pacifique. Les espaces publics, particulièrement les rues et les trottoirs, sont depuis toujours des lieux privilégiés de l’expression politique et associative."
				)
			),
			chapterTitle($toc, "En vertu du Code criminel"),
			paragraph(
				array(
					"Selon notre bilan, 471 accusations ont été portées en vertu du ",
					em("Code criminel"),
					" durant la grève étudiante. Nous présentons dans cette section les accusations les plus fréquentes : entrave au travail des policiÈres,  voies de fait sur unE agentE de la paix et méfait. Nous traitons ensuite de l’accusation d’incitation à craindre le terrorisme vu son caractère exceptionnel. Quelques accusations de complot et de port de masque à des fins criminelles ont été recensées mais ne sont pas traitées dans ce rapport. Finalement, nous aborderons les conditions de libération associées aux accusations criminelles."
				)
			),
			aside(
				array(
					chapterTitle($toc, "L’exemple des accusations de la «&nbsp;Maison de la grève&nbsp;»"),
					paragraph("Dans la nuit du 12 au 13 mars 2012, le SPVM a procédé à cinq arrestations à la «&nbsp;Maison de la grève&nbsp;». Des étudiantEs avaient loué un local commercial pour faire office de lieu de réunion ouvert pour les militantEs du mouvement étudiant. Les témoignages relatent que cette nuit-là, la police surveillait le local depuis des heures. Des étudiantEs sont sortiEs fumer et l’un d’eux avait une bière à la main. Les policiÈres sont intervenuEs et ont matraqué et poivré cet étudiant. Les autres se sont alors réfugiés dans le local. Avec du renfort, les policiÈres  ont forcé l’entrée du local, fouillé les lieux avec l’aide de chiens et pris des photos du matériel de mobilisation."),
					paragraph(
						array(
							"Les policiÈres ont usé de force abusive envers les occupantEs du  local avec leurs matraques et du poivre de Cayenne. Selon un témoin, les gens qui protestaient ont été fouillés et ont dû s’identifier. Cinq militantEs ont finalement été arrêtéEs et accuséEs d’entrave au travail des policiÈres, de voies de fait sur unE agentE de la paix et d’intimidation à l’encontre d’une personne associée au système judiciaire. Selon leur avocat Me Denis Poitras, cette dernière accusation est très rarement utilisée et a été adoptée pour lutter contre les Hell’s Angels",
							renvoi(
								$notes,
								array(
									"Caroline Touzin, «&nbsp;",
									linkAnchor("http://www.lapresse.ca/actualites/quebec-canada/justice/201203/14/01-4505600-greve-etudiante-5-jeunes-se-disent-intimides-par-la-police.php", "Grève étudiante: 5 jeunes se disent intimidés par la police&nbsp;"),
									"», La Presse, 15 mars 2012."
								)
							),
							". Selon lui, l’endroit et ses occupantEs étaient surveillés et cette intervention était planifiée depuis longtemps."
						)
					)
				)
			),
			chapterTitle($toc, "Entrave au travail des policiÈres"),
			paragraph(
				array(
					"Nous avons recensé vingt-deux accusations d’entraves au travail des policiÈres dans les témoignages. Ce type d’accusation a surtout été porté contre des gens qui photographiaient ou filmaient des interventions policières. Certains témoins avancent que cette accusation fut portée à la suite d’investigations policières qui n’avait pas permis d’établir de preuve contre eux. Selon l’article 129 du ",
					em("Code criminel"),
					", cette accusation consiste à entraver volontairement unE agentE de la paix dans l’exécution de ses fonctions. L’acte d’entrave doit avoir été commis de manière volontaire et une personne ne peut être déclarée coupable du seul fait de ne pas s’être éloignée ou d’avoir protesté verbalement contre une intervention policière",
					renvoi(
						$notes,
						array(
							"R. c Bédard, 2009 CanLII 1473 (QC CA). "
						)
					),
					". Considérant que filmer ou photographier des policiÈres dans l’exercice de leurs fonctions est légal, il est difficile de comprendre en quoi cela peut constituer une entrave au travail policier",
					renvoi(
						$notes,
						array(
							"Jean-François Néron, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/le-soleil/actualites/justice-et-faits-divers/201003/15/01-4260979-legal-de-filmer-une-arrestation.php", "Légal de filmer une arrestation&nbsp;"),
							"», Le Soleil, 16 mars 2010."
						)
					),
					". Selon de nombreux témoignages, il y a eu utilisation inappropriée et abusive de cette accusation par les policiÈres lors de la mise en œuvre de leur pouvoir discrétionnaire."
				)
			),
			chapterTitle($toc, "Voie de fait sur unE agentE de la paix"),
			paragraph(
				array(
					"Cinquante-trois accusations des voies de fait sur unE agentE de la paix (art. 270 du ",
					em("Code criminel"),
					") ont été recensées dans les témoignages. Plusieurs d’entre elles visent des militantEs lors de leur participation à des manifestations nocturnes à Montréal. Plusieurs personnes accusées de cette infraction disent n’avoir rien fait de mal, si ce n’est tout simplement d’avoir été au mauvais endroit au mauvais moment. Cette accusation a également été utilisée dans les cas d’occupation ou de blocage d’établissements publics quand les militantEs refusaient de se déplacer mais sans toutefois repousser activement les policiÈres. On peut ici penser à des tactiques militantes comme des ",
					em("sit-in"),
					" lors desquelles les participantEs demeurent assisES jusqu’à ce que les policiÈres les déplacent physiquement. Certains témoins expliquent que ce chef d’accusation a été utilisé quand aucun autre n’aurait pu être retenu contre eux. Certains témoignages indiquent que la force policière ne faisait aucune distinction entre résistance passive comme moyen de contestation politique et utilisation de la force pour résister à une arrestation. On peut se demander si cette accusation est appropriée lorsqu’une personne refuse de se déplacer en demeurant pacifique, puisqu’il n’y a pas d’utilisation de la force pour résister à une arrestation."
				)
			),
			paragraph(
				array(
					"En plus de ces accusations de voies de faits simples sur unE agentE de la paix, nous avons recensé dans les témoignages dix accusations d’agression armée contre unE agentE de la paix (article 270.01 du ",
					em("Code criminel"),
					") consécutives à des manifestations ayant donné lieu à des affrontements entre policiÈres et manifestantEs. Les personnes ainsi accusées décrient largement l’utilisation sans fondement de cette accusation. Par exemple, un témoin raconte avoir été arrêté alors qu’il attendait des amis sur le coin d’une rue et qu’il n’avait pris part à aucune manifestation. Après qu’un policier lui ait dit «&nbsp;l’avoir vu lancer une bouteille de bière sur un policier&nbsp;», une policière l’a informé plus tard qu’elle l’arrêtait parce que quelqu’un devait payer et qu’il était le premier sur le bord."
				)
			),
			chapterTitle($toc, "Méfait"),
			paragraph(
				array(
					"Nous avons également recensé, dans les témoignages récoltés, 248 accusations de méfait. Ce chef d’accusation a surtout été utilisé lors d’occupations de bureaux ou d’autres lieux comme la cafétéria de l’Université du Québec en Outaouais et le pont Jacques-Cartier",
					renvoi(
						$notes,
						array(
							"Vincent Larouche, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/actualites/quebec-canada/justice/201205/16/01-4525972-blocage-du-pont-jacques-cartier-conditions-severes-pour-les-accuses.php", "Blocage du pont Jacques-Cartier: conditions sévères pour les accusés"),
							"&nbsp;», La Presse, 16 mai 2012."
						)
					),
					". Commettre un méfait consiste, selon l’article 430 du ",
					em("Code criminel"),
					", à volontairement détruire ou détériorer un bien, ou en empêcher l’utilisation. Une interprétation selon nous excessive de cette infraction permet de conclure qu’une occupation pacifique peut donner lieu à une telle accusation."
				)
			),
			chapterTitle($toc, "Incitation à craindre des activités terroristes"),
			paragraph(
				array(
					"Le 10 mai 2012, des engins fumigènes ont été activés dans le métro et le réseau a été paralysé pendant près de trois heures. Quatre personnes ont été accusées de complot, de méfait et, chose complètement inusitée, «&nbsp;d’incitation à craindre un acte terroriste&nbsp;» en vertu de l’article 83.231 du ",
					em("Code criminel"),
					". Les photos des jeunes accuséEs ont été diffusées en boucle à la télévision. Après avoir été détenuEs pendant plusieurs jours, l’un d’entre eux pendant près de deux semaines, il et elles ont été libéréEs avec des conditions très sévères."
				)
			),
			blockquote(
				array(
					paragraph("Je me pose des sérieuses questions. Les médias semblent avoir créé la crise du 10 mai en parlant de chaos de 15 millions de dollars, de terrorisme, d’attentat. L’ensemble du métro a été paralysé trois heures alors que la ligne jaune n’a pas été touchée. Le 16 et le 25 avril, d’autres fumigènes ont entraîné des arrêts du métro beaucoup plus courts. Les quatre étudiantEs sont les têtes de turcs d’une crise créée par les médias et les autorités."),
					cite("Une personne proche d’unE  des accuséEs du 10 mai 2012")
				)
			),
			paragraph(
				array(
					"L’accusation d’incitation à faire craindre un acte terroriste, créée en 2004",
					renvoi(
						$notes,
						array(
							"Décret fixant au 1",
							sup("er"),
							" décembre 2004 la date d’entrée en vigueur de certains articles de la Loi, TR2004-158, (2004) Gaz C II, Vol 138, n",
							sup("o"),
							" 25 (Loi de 2002 sur la sécurité publique)."
						)
					),
					", soit quelques années après l’adoption de la ",
					em("Loi anti-terroriste"),
					renvoi(
						$notes,
						array(
							"L.C. 2001, c. 41."
						)
					),
					", n’avait à ce jour jamais été utilisée. Son emploi contre une action dans le cadre de la grève étudiante a été fortement critiqué par des spécialistes, avocatEs, professeurEs, et chroniqueurs judiciaires. Mentionnons plus particulièrement les propos d’Yves Boisvert : selon lui, lancer des engins fumigènes et interrompre la circulation du métro est peut-être un «&nbsp;méfait&nbsp;» mais il ne s’agit pas d’un acte terroriste. Utiliser ces dispositions à l’endroit de jeunes sans casier judiciaire et dans un cas très discutable banalise ces dispositions anti-terroristes",
					renvoi(
						$notes,
						array(
							"Yves Boisvert, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/debats/chroniques/yves-boisvert/201205/15/01-4525632-le-bon-usage-de-lantiterrorisme.php", "Le bon usage de l’antiterrorisme"),
							"&nbsp;», La Presse, 16 mai 2012."
						)
					),
					"."
				)
			),
			paragraph(
				array(
					"Selon le ",
					em("Code criminel"),
					", cette infraction exclut les actions commises «&nbsp;dans le cadre de revendications, de protestations ou de manifestations d’un désaccord ou d’un arrêt de travail&nbsp;» qui n’ont pas pour but de causer des blessures graves ou la mort ou de compromettre gravement la santé ou la sécurité de tout ou partie de la population",
					renvoi(
						$notes,
						array(
							"Voir l’article 83.01 du Code criminel."
						)
					),
					"."
				)
			),
			paragraph(
				array(
					"Accuser des étudiantEs d’une telle infraction est exagéré et ne correspond ni à la lettre, ni à l’esprit de cette disposition. À la lecture des débats parlementaires ayant entouré son adoption",
					renvoi(
						$notes,
						array(
							"Débats de la chambre des communes, 37",
							sup("e"),
							" législature, 1<sup>re</sup> session, numéro 181, 2 mai 2002."
						)
					),
					", on constate que l’utilisation de cette accusation en pareilles circonstances va à l’encontre de l’objectif visé. Ceci donne toutefois raison aux dénonciations, notamment du NPD, du Bloc québécois, d’",
					em("Amnistie internationale"),
					", de la ",
					em("Ligue des droits et libertés"),
					" et de la ",
					em("Coalition pour la surveillance internationale des libertés civiles"),
					renvoi(
						$notes,
						array(
							"L’Association du Barreau Canadien, «&nbsp;",
							linkAnchor("http://www.cba.org/abc/pdf/c-36fre.pdf", "Mémoire à propos du projet de loi C-36 Loi antiterroriste&nbsp;"),
							"; Amnesty International, «&nbsp;Security through Human Rights: Amnesty International Canada’s Submission to the Special Senate Commitee on the Anti-Terrorism Act and House of Commons Sub-Committee on Public Safety and National Security as part of the Review of Canada’s Anti-Terrorism Act&nbsp;», 16 mai 2005; Coalition pour la surveillance internationale des libertés civiles, «&nbsp;",
							linkAnchor("http://www.interpares.ca/fr/publications/pdf/ICLMG_C-36_Brief.pdf", "Mémoire présenté à la Chambre des communes dans le cadre de l’examen de la Loi antiterroriste"),
							"&nbsp;», avril 2005."
						)
					),
					", qui s’opposaient à la création de cette nouvelle infraction. Ceux-ci  craignaient justement son détournement et son application à des groupes de protestation sociale pouvant avoir recours à divers moyens d’action ou de désobéissance civile sans être des terroristes. Le Barreau canadien soutenait qu’«&nbsp;assimiler ce type de protestation à du terrorisme, avec tous les stigmates profonds et les peines sévères qui en découlent, est aussi peu souhaitable que nécessaire",
					renvoi(
						$notes,
						array(
							"Mémoire de l’Association du Barreau Canadien, ibid., à la p. 24. "
						)
					),
					"»."
				)
			),
		
			chapterTitle($toc, "Les conditions de libération"),
			paragraph("Étant donné le principe fondamental de la présomption d’innocence, la mise en liberté pure et simple en attente de procès est la règle. Cependant, des conditions à respecter peuvent être imposées, soit par la police par une promesse de comparaître, soit par un juge à l’issue d’une enquête sur la mise en liberté provisoire."),
			paragraph(
				array(
					"Plusieurs personnes accusées d’infractions criminelles ont reçu des conditions d’interdiction de territoire limitant leur droit d’accès à certains espaces géographiques, comme celle de ne pas s’approcher à moins de 300 mètres, parfois 500, d’un établissement d’enseignement ou encore de ne pas se trouver dans un quadrilatère formé par la rue Sherbrooke au nord, la rue Notre-Dame ou le fleuve au sud, la rue Saint-Laurent ou la rue University à l’ouest et la rue Papineau ou la rue d’Iberville à l’est",
					renvoi(
						$notes,
						array(
							"Caroline Touzin, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/actualites/quebec-canada/justice/201203/14/01-4505600-greve-etudiante-5-jeunes-se-disent-intimides-par-la-police.php", "Grève étudiante: 5 jeunes se disent intimidés par la police&nbsp;"),
							"», La Presse, 15 mars 2012 et Christiane Desjardins, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/actualites/quebec-canada/justice/201206/12/01-4534073-yalda-machouf-khadir-est-liberee-sous-conditions.php", "Yalda Machouf-Khadir est libérée sous conditions"),
							"&nbsp;», La Presse, 12 juin 2012."
						)
					),
					". CertainEs ont même été interditEs de territoire sur toute l’île de Montréal ou encore interditEs de prendre le métro. De telles conditions ont directement pour conséquence de limiter la capacité de participer aux rassemblements politiques, qu’il s’agisse d’assemblées générales d’associations étudiantes ou de manifestations. Par exemple à Gatineau, l’interdiction couvrait la presque totalité du centre-ville, forçant ainsi l’annulation pure et simple de l’activité du 1<sup>er</sup> mai 2012. Une autre condition fréquemment imposée est celle de ne pas communiquer avec d’autres accuséEs. Cette condition est particulièrement difficile à respecter à cause du grand nombre de personnes accusées et du fait que plusieurs fréquentent la même université ou le même cégep. Cette  dernière force aussi à cesser de participer aux rassemblements politiques."
				)
			),
			paragraph(
				array(
					"Couplées à des ordres de respecter un couvre-feu et à l’obligation de se rapporter régulièrement à la police, ces conditions contribuent à l’isolement de personnes présumées innocentes. Selon le ",
					em("Réseau d’entraide et de solidarité avec les arrêtéEs criminaliséEs"),
					", les accuséEs cumulant ces conditions de libération à celle de périmètres d’exclusion, se trouvent «&nbsp;isoléEs, briséEs et renduEs paranoïaques par le sentiment d’une surveillance constante. Il est impossible pour les accuséEs de ne pas ressentir leur quotidien comme l’antichambre de leur incarcération&nbsp;»",
					renvoi(
						$notes,
						array(
							"Réseau d’entraide et de solidarité avec les arrêtéEs criminaliséEs (RESAC), «&nbsp;",
							linkAnchor("http://leresac.wordpress.com", "La grève est-elle devenue une circonstance aggravante&nbsp;?"),
							"&nbsp;»."
						)
					),
					". "
				)
			),
			paragraph("Une autre condition très fréquemment imposée est celle de ne pas participer à une manifestation illégale ou non paisible. Depuis l’adoption des règlements municipaux obligeant à remettre l’itinéraire à la police, pratiquement toutes les manifestations, bien que pacifiques, peuvent être considérées illégales. L’imposition de cette condition équivaut donc à brimer le droit de manifester pacifiquement. De plus, certainEs accuséEs ont expressément reçu la condition de s’abstenir de manifester sur l’île de Montréal ou même en tout temps et tout lieu. De sérieuses questions peuvent être soulevées quant à la constitutionnalité de telles conditions."),
			paragraph(
				array(
					"Finalement, plusieurs personnes ont dû déposer des cautionnements de 2 000$ ou 3 000$  pour être remises en liberté. Quelques accuséEs ont dû fournir des engagements de 10 000$ ou 15 000$",
					renvoi(
						$notes,
						array(
							"Christiane Desjardins, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/actualites/quebec-canada/justice/201206/12/01-4534073-yalda-machouf-khadir-est-liberee-sous-conditions.php", "Yalda Machouf-Khadir est libérée sous conditions"),
							"&nbsp;», La Presse, 12 juin 2012."
						)
					),
					". La juge Morin qui a imposé ces engagements considérait «&nbsp;qu’en resserrant les conditions et en rehaussant les garanties financières, le risque de voir les deux jeunes accusés récidiver dans un proche avenir est considérablement amoindri&nbsp;»",
					renvoi(
						$notes,
						array(
							"La Presse Canadienne, «&nbsp;",
							linkAnchor("http://www.ledevoir.com/societe/justice/352325/la-jeune-machouf-khadir-est-remise-en-liberte-sous-fortes-conditions", "La jeune Machouf-Khadir est remise en liberté sous fortes conditions"),
							"&nbsp;», Le Devoir, 13 juin 2012. Me Véronique Robert rapporte que certainEs arrêtéEs ont reçu des conditions de remise en liberté semblables à celles que l’on impose à des trafiquants de stupéfiants dans un contexte de criminalité organisée: «&nbsp;",
							linkAnchor("http://voir.ca/veronique-robert/2012/09/24/garder-la-paix-et-avoir-une-bonne-conduite/", "Garder la paix et avoir une bonne conduite"),
							"&nbsp;», Voir, 24 septembre 2012."
						)
					),
					"."
				)
			),
			paragraph(
				array(
					"Est-ce que ces conditions étaient nécessaires pour assurer la protection du public ou s’agissait-il d’un détournement de la finalité des conditions de libération pour punir les manifestantEs et contrer la dissidence politique&nbsp;? C’est la question que se posait la juriste Jackie Esmonde dans un texte",
					renvoi(
						$notes,
						array(
							"Jackie Esmonde, «&nbsp;Bail, Global Justice and the Limits of Dissent&nbsp;» (2003), 41 Osgoode Hall L.J. 323-361, para 30."
						)
					),
					" analysant les conditions de remise en liberté imposées à des protestataires notamment lors du Sommet de Vancouver en 1997, du Sommet de Québec en 2001 et des actions du ",
					em("Ontario Coalition Against Poverty").
					". Elle concluait dans son article que l’imposition systématique de conditions de libération standardisées sans analyse individualisée – notamment sur les caractéristiques personnelles de l’accuséE, ses antécédents judiciaires et la nature de son infraction – ne servait pas la justice. Cette tendance indiquerait plutôt une instrumentalisation de ces conditions pour contrer la dissidence politique. La récurrence de conditions de remise en liberté de type similaire à celles imposées aux arrêtéEs de 2012 entraîne la même conclusion."
				)
			),
			notes($notes)
		)
	)
);
$interpellations = array(
	section(
		$toc,
		array(
			image(
				"images/fromPDF/interpellations.jpeg",
				"Interpellations, fouilles et détentions",
				null,
				"Photo © Darren Ell 2012"
			),
			sectionTitle($toc,"Les interpellations, les fouilles et les détentions en vertu de l’article 31 du Code criminel"),
			paragraph(
				array(
					"Plusieurs arrestations pour «&nbsp;violation appréhendée de la paix&nbsp;», accompagnées de fouilles, de saisies, de contrôles d’identité et de périodes de détention de plusieurs heures, ont été effectuées par les différents corps de police à l’occasion du mouvement étudiant. L’analyse juridique appuyée sur des  faits démontrera que l’utilisation du pouvoir prévu à l’article 31 du ",
					em("Code criminel"),
					" était abusive dans la plupart des cas."
				)
			),
			subsectionTitle($toc,"La situation factuelle"),
			chapterTitle($toc, "Les interpellations lors du Grand prix de Montréal"),
			blockquote(
				array(
					paragraph("J’étais près de la biosphère. Une policière m’a escorté jusqu’au métro Berri-UQAM. J’ai vu des dizaines de jeunes détenuEs préventivement. Rien d’autre que mon carré rouge ne pouvait me qualifier de suspect en cette matinée au Parc Jean-Drapeau."),
					cite("Une personne expulsée de l’Ile Sainte-Hélène le 10 juin 2012")
				)
			),
			paragraph(
				array(
					"Lors du Grand prix de Montréal, le SPVM a procédé à 130 arrestations entre le jeudi 7 juin et le dimanche 10 juin 2012. Comme le concept d’arrestation préventive n’existe pas en droit canadien, les policiÈres ont parlé d’arrestations pour «&nbsp;violation appréhendée de la paix&nbsp;» et ont invoqué l’article 31 du ",
					em("Code criminel.")
				)
			),
			paragraph(
				array(
					"Le 7 juin, les personnes présentes au centre-ville pour une manifestation intitulée «&nbsp;Perturbons le cocktail du Grand Prix!&nbsp;» ont été prises en souricière avant le début de la manifestation. Les policiÈres ont procédé à dix-huit arrestations ciblées de personnes habillées en noir ou portant des symboles «&nbsp;communistes&nbsp;»",
					renvoi(
						$notes,
						array(
							"Radio-Canada, «&nbsp;",
							linkAnchor("http://www.radio-canada.ca/nouvelles/societe/2012/06/07/001-grandprix-clac-classe.shtml", "Ouverture du Grand Prix : 37 arrestations"),
							"&nbsp;», 8 juin 2012."
						)
					),
					". Après une détention d’une heure, les manifestantEs ont été menacéEs d’arrestation s’ils et elles ne se dispersaient pas. "
				)
			),
			paragraph(
				array(
					"La police affirme que ces dix-huit personnes arrêtées ont été appréhendées en vertu de l’article 31 du ",
					em("Code criminel"),
					". Selon le commandant Alain Simoneau du SPVM, «&nbsp;il y avait une source de danger identifiée, une source de danger qui représente une menace, c’est clair&nbsp;»",
					renvoi(
						$notes,
						array(
							"Radio-Canada, «&nbsp;",
							linkAnchor("http://www.radio-canada.ca/nouvelles/societe/2012/06/07/001-grandprix-clac-classe.shtml", "Ouverture du Grand Prix : 37 arrestations"),
							"&nbsp;», 8 juin 2012."
						)
					),
					". Les témoignages révèlent que les agentEs du SPVM se sont contentés d’énoncer le numéro de l’article, sans l’expliquer ni justifier son utilisation. Une jeune femme à qui on avait dit d’abord qu’elle était arrêtée en vertu de cet article a reçu des mois plus tard un constat d’infraction pour attroupement illégal en vertu du règlement P-6 de la Ville de Montréal."
				)
			),
			blockquote(
				array(
					paragraph("J’ai été arrêté violemment par quatre agents anti-émeute en raison de signes distinctifs (keffieh, chandail du Che, macarons contre la hausse). Ils m’ont tordu le bras en me plaquant au sol afin de me menotter. J’ai ensuite été amené dans une ruelle voisine où on m’a alors dit que j’avais été arrêté en vertu de l’article 31 du Code criminel. Transféré dans un poste de police, j’ai été fouillé, photographié et détenu pendant dix heures avant d’être relâché. On m’a indiqué que je recevrais «&nbsp;quelque chose&nbsp;» par la poste. En date du 14 octobre 2012, rien ne m’a encore été transmis."),
					cite("Une personne arrêtée lors de la manifestation du 7 juin 2012")
				)
			),
			paragraph(
				array(
					"Le dimanche 10 juin, quarante-trois personnes ont été arrêtées sur l’île Sainte-Hélène, à proximité du parc Jean Drapeau ou à la station de métro Berri-UQAM. Le chef du SPVM, M. Marc Parent, a qualifié ces arrestations de «&nbsp;préventives&nbsp;»",
					renvoi(
						$notes,
						array(
							"TVA Nouvelles, «&nbsp;Bilan d’un week-end mouvementé à Montréal : 130 arrestations en quatre jours&nbsp;», 11 juin 2012."
						)
					),
					". Il a expliqué, en conférence de presse, que de nombreuses personnes qui avaient des sacs à dos ou des sacs de sport avaient été fouillées dans le métro sur la base d’un «&nbsp;règlement qui interdit aux usagers de métro d’emprunter le service de transport en commun s’ils ont en leur possession des armes ou des objets jugés dangereux&nbsp;»",
					renvoi(
						$notes,
						array(
							"TVA Nouvelles, «&nbsp;Bilan d’un week-end mouvementé à Montréal : 130 arrestations en quatre jours&nbsp;», 11 juin 2012."
						)
					),
					". Or, des expulsions ont eu lieu indépendamment des résultats de la fouille. La plupart des témoins relatent avoir été expulsés du métro même si les policiÈres  n’avaient rien trouvé dans leurs sacs. Une personne s’est ainsi fait escorter vers la sortie après qu’un policier eût trouvé des balles de jonglerie dans son sac. Dans un autre cas, un étudiant en arts plastiques s’est fait expulser parce qu’il avait de la peinture rouge dans son sac. "
				)
			),
			paragraph(
				array(
					"Le chef de police de Montréal a déclaré que la police était intervenue sur la base des comportements des individus, et non sur la base de l’apparence ou l’affichage d’un symbole politique",
				renvoi(
					$notes,
					array(
						"TVA Nouvelles, «&nbsp;Bilan d’un week-end mouvementé à Montréal : 130 arrestations en quatre jours&nbsp;», 11 juin 2012."
					)
				),
				". Or, plusieurs témoins rapportent s’être fait interpeler simplement pour avoir porté le carré rouge. L’accès au métro a carrément été refusé à plus de cinquante personnes. Un témoin rapporte avoir dû retourner chez lui en traversant le pont Jacques-Cartier à pied. Une personne arrêtée alors qu’elle se rendait à La Ronde a dû quitter l’île en ambulance à cause d’un coup de chaleur et du refus des policiÈres de lui donner sa médication. "
				)
			),
			paragraph(
				array(
					"Plusieurs personnes arrêtées disent qu’elles ne voulaient pas manifester mais simplement observer les événements, ou profiter de la belle journée, aller à La Ronde ou au ",
					em("Piknic electronik"),
					". Elles avaient d’ailleurs pris soin de ne porter aucun signe distinctif. Par exemple, un groupe d’amiEs, assis dans l’herbe à la sortie du métro sur l’Île Ste-Hélène, a été encerclé par 22 policiÈres et détenu. Un agent leur a dit que l’article 31 (1) du ",
					em("Code criminel"),
					" permettait «&nbsp;l’arrestation sans mise en accusation le temps nécessaire à prévenir une violation de la paix&nbsp;». Ils et elles n’ont pas eu droit à un avocat. Les jeunes qui s’approchaient de l’encerclement se faisaient détenir également. Toutes ces personnes ont ensuite été amenées à l’écart et ont subi une fouille intrusive par palpation sur tout le corps, directement sur les seins selon un témoin. Se plaignant que ses menottes étaient trop serrées, cette femme s’est fait répondre que «&nbsp;lorsqu’elle aurait les mains bleues, on avisera&nbsp;»."
				)
			),
			paragraph("Plusieurs témoins affirment avoir été détenus de trois à quatre heures, à la Biosphère ou dans un autobus de la STM. Plusieurs avaient les mains liées avec des menottes ou des attaches en plastique. Les personnes détenues dans un autobus ont été relâchées à la station de métro Angrignon. Plusieurs rapportent ne pas avoir eu accès à de l’eau malgré la chaleur accablante. Toutes ces personnes disent ne pas avoir été clairement informées des motifs de leur arrestation ou de leur détention. CertainEs policiÈres leur ont parlé de «&nbsp;détentions aux fins d’enquête&nbsp;», d’«&nbsp;attroupement potentiellement illégal&nbsp;», alors que d’autres ont refusé de donner quelconque explication."),
			image(
				"images/fromPDF/detensions.jpeg",
				"Un homme ligoté par terre, entourré de policiers",
				null,
				"Photo © Philippe Montbazet 2012"
			),
			chapterTitle($toc, "L’interception d’autobus "),
			paragraph(
				array(
					"Dans la nuit du 4 mai 2012, alors qu’ils revenaient de Victoriaville, deux autobus remplis d’étudiantEs du cégep de Montmorency ont été interceptés par la Sûreté du Québec vers 20h00 et ont été escortés jusqu’au poste de police de St-Hyacinthe",
					renvoi(
						$notes,
						array(
							"Anthony Lecossois, «&nbsp;",
							linkAnchor("http://www.delitfrancais.com/2012/05/06/la-sq-arrete-des-bus-entiers-de-manifestants/", "La SQ arrête des bus entiers de manifestants&nbsp;"),
							"» Le Délit français, 6 mai 2012."
						)
					),
					". Les passagÈres ont été informéEs qu’ils étaient détenuEs en vertu de l’article 31 du ",
					em("Code criminel"),
					" pour avoir commis une violation de la paix. Vers 3h00 ou 4h00 du matin, ils ont été identifiéEs et photographiéEs individuellement, puis ont été soumisEs à une fouille complète. Les autobus ont finalement regagné Laval vers 6h00 du matin. Leur détention aura donc duré de neuf à dix heures, sans eau, sans nourriture. Ils et elles ont été relâchéEs sans accusation",
					renvoi(
						$notes,
						array(
							"Il semble qu’on ait dit aux personnes détenues qu’elles l’étaient pour fins d’enquête. Le pouvoir de détenir pour fins d’enquête est fort controversé et l’analyse de ses limites dépasse le cadre du présent texte. Mentionnons uniquement que le cas relaté dépasse les limites et paramètres imposés par la Cour suprême dans R. c. Mann, [2004] 3RCS 59, puisque notamment une telle détention doit être de courte durée et ne pas être prétexte à une fouille illégale."
						)
					),
					". Un autre autobus occupé par des étudiantEs de McGill et de Concordia a aussi été intercepté et les passagÈres interrogéEs et détenuEs pendant dix heures.&nbsp;Les médias ont rapporté que des accusations d’émeute seraient portées, mais finalement aucune accusation n’a été déposée. Il est singulier que trois autobus, parmi une cinquantaine, aient été aléatoirement contrôlés au retour de Victoriaville."
				)
			),
			paragraph(
				array(
					"Le 15 mai 2012, un autobus se rendant au cégep Lionel-Groulx à Sainte-Thérèse où se tenaient des lignes de piquetage et où l’escouade anti-émeute de la SQ était intervenue",
					renvoi(
						$notes,
						array(
							"La Presse canadienne, «&nbsp;",
							linkAnchor("http://www.ledevoir.com/societe/education/350127/greve-etudiante-agitation-au-college-lionel-groulx-et-arrestations-a-montreal", "Grève étudiante : agitation au Collège Lionel-Groulx et arrestations à Montréal&nbsp;"),
							"», Le Devoir, 15 mai 2012. "
						)
					),
					", a été intercepté sur l’autoroute. Les 18 personnes présentes ont été arrêtées pour violation appréhendée de la paix en vertu de l’article 31 du ",
					em("Code criminel"),
					renvoi(
						$notes,
						array(
							linkAnchor("http://www.youtube.com/watch?v=9TQy9FKKVaQ", "http://www.youtube.com/watch?v=9TQy9FKKVaQ"),
							" (à 3:36)"
						)
					),
					" et ont été conduites au poste autoroutier de Laval «&nbsp;afin que leurs intentions et leurs identifications soient examinées&nbsp;»",
					renvoi(
						$notes,
						array(
							linkAnchor("http://www.youtube.com/watch?v=9TQy9FKKVaQ", "http://www.youtube.com/watch?v=9TQy9FKKVaQ"),
							" (à 3:20)"
						)
					),
					". "
				)
			),
			paragraph("Un témoin raconte qu’après s’être fait empoigner le bras par un agent, il a été fouillé par palpation, les jambes écartées les mains contre le mur. Il a ensuite été interrogé. Un agent lui a dit qu’ils allaient commettre des actes criminels au Cégep de Lionel-Groulx, ce que le témoin a nié. À la fin de l’interrogatoire, ils lui ont fait signer un document selon lequel il n’était pas en état d’arrestation, mais se trouvait en «&nbsp;détention préventive pour fins d’enquête&nbsp;». Le témoin note l’inconstance des policiÈres : les inspecteurs affirmaient qu’il était en détention préventive alors que les gradés parlaient d’arrestation. Un policier est venu s’excuser : «&nbsp;vous savez on fait juste notre travail, on avait appris qu’il y avait une arme dans votre autobus, on est désolés, on ne veut pas nuire à votre liberté&nbsp;»."),
			paragraph(
				array(
					"Une autre témoin corrobore cette inconstance: les policiÈres ont d’abord parlé de méfaits, puis ont invoqué l’article 31 du ",
					em("Code criminel"),
					". Le témoin a demandé quels étaient les motifs raisonnables qui laissaient croire que les occupantEs de l’autobus allaient commettre une violation de la paix. Les policiÈres ont répondu : «&nbsp;Vous comprenez mademoiselle, les événements qui se passent ces derniers mois&nbsp;»."
				)
			),
			subsectionTitle($toc,"Les faits en regard du droit"),
			chapterTitle($toc, "L’utilisation abusive de l’article 31"),
			paragraph(
				array(
					"De l’avis de plusieurs, l’article 31 du ",
					em("Code criminel"),
					" ne pouvait être utilisé dans ces circonstances",
					renvoi(
						$notes,
						array(
							"Véronique Robert, «&nbsp;",
							linkAnchor("http://voir.ca/veronique-robert/2012/06/28/%C2%ABau-nom-de-larticle-31-je-vous-arrete%C2%BB/", "Au nom de l’article 31, je vous arrête"),
							"&nbsp;», Voir, 28 juin 2012; Marie-Ève Sylvestre, ",
							linkAnchor("http://ledevoir.com/societe/actualites-en-societe/352178/les-arrestations-preventives-sont-illegales-et-illegitimes", "Les arrestations préventives sont illégales et illégitimes"),
							", Le Devoir, 12 juin 2012; Moïse Marcoux-Chabot, ",
							linkAnchor("http://moisemarcouxchabot.com/2012/06/11/a-propos-des-arrestations-detentions-et-fouilles-preventives/", "À propos des arrestations, détentions et fouilles préventives&nbsp;"),
							"», 11 juin 2012."
						)
					),
					". Cet article permet à unE agentE de la paix, ",
					em("témoin d’une violation de la paix"),
					", d’arrêter une personne qui vient de commettre une infraction, qui est en train d’en commettre une ou qu’il croit, pour des motifs raisonnables, être sur le point d’y prendre part ou de la renouveler. Un acte criminel doit avoir été commis ou être sur le point d’être commis. Il ne permet pas une arrestation pour une violation de la paix appréhendée."
				)
			),
			paragraph(
				array(
					"La violation de la paix doit donc déjà avoir eu lieu ou être imminente pour que les forces policières puissent arrêter des personnes qui se joindraient à cette violation de la paix ou la recréeraient. Selon l’arrêt ",
					em("Januska"),
					renvoi(
						$notes,
						array(
							em("R. c Januska and the Queen"),
							", 1996 CanLII 8288 (ON SC)."
						)
					),
					", la verbalisation d’un désaccord, bien que véhément et émotif, ne constitue pas une violation de la paix au sens de l’article 31. Le concept de violation de la paix implique un certain degré de perturbation, de menaces ou d’activités tumultueuses",
					renvoi(
						$notes,
						array(
							em("Hayes c Thompson"),
							", 1985 CanLII 151 (BC CA)."
						)
					),
					". "
				)
			),
			paragraph(
				array(
					"Dans l’arrêt ",
					em("Brown"),
					renvoi(
						$notes,
						array(
							em("Brown v Regional Municipality of Durham Police Service Board"),	
							", 1998 CanLII 7198 (ON CA)."
						)
					),
					", la Cour d’appel d’Ontario a décidé qu’une arrestation pour prévenir une violation de la paix pouvait être légale s’il y avait un risque substantiel que cette violation de la paix survienne. Dans cette affaire, les personnes arrêtées avaient été détenues entre cinq et vingt minutes à un barrage routier sur le chemin menant au lieu de rencontre d’un groupe de motards. La Cour a jugé la détention abusive car 1) aucune violation de la paix n’était imminente; 2) la détention ne visait pas à prévenir une violation de la paix spécifiquement identifiable; 3) les motifs de la police ne reposaient pas sur ce que les personnes arrêtées avaient elles-mêmes fait, mais sur leur appartenance présumée à un groupe; 4) la liberté de circulation est un droit fondamental; 5) l’interférence avec la liberté individuelle était substantielle en raison du nombre de personnes arrêtées; et 6) une présence policière importante aurait suffi à assurer la sécurité du public."
				)
			),
			paragraph(
				array(
					"La légalité des arrestations préventives effectuées lors du sommet du G20 à Toronto en 2010 a été contestée dans l’arrêt ",
					em("Puddy"),
					". La Cour provinciale de l’Ontario a déclaré que procéder à des arrestations préventives pendant des manifestations équivalait à pénaliser la dissidence. Ce type d’arrestation «&nbsp;risks distorting the necessary if delicate balance between law enforcement concerns for public safety and order, on the one hand, and individual rights and freedoms, on the other&nbsp;»",
					renvoi(
						$notes,
						array(
							em("R. c. Puddy"),
							", 2011 CanLII 399 (ON CJ), au para. 44."
						)
					),
					". Selon le juge, la trop grande discrétion donnée aux policiÈres pour juger ce qui constitue une violation de la paix risque de «&nbsp;criminaliser la dissidence",
					renvoi(
						$notes,
						array(
							em("R. c. Puddy"),
							", 2011 CanLII 399 (ON CJ), au para. 44 (notre traduction)."
						)
					),
					"&nbsp;», notamment parce que le message des manifestantEs est délégitimé et discrédité par les arrestations massives. "
				)
			),
			paragraph(
				array(
					"Somme toute, cette forme d’arrestation pour assurer la sécurité du public est, selon la professeure Sylvestre, «&nbsp;extrêmement limitée&nbsp;: la violation appréhendée doit être imminente, fondée et le risque qu’elle se matérialise doit être réel et substantiel&nbsp;»",
					renvoi(
						$notes,
						array(
							"Marie-Ève Sylvestre, «&nbsp;",
							linkAnchor("http://ledevoir.com/societe/actualites-en-societe/352178/les-arrestations-preventives-sont-illegales-et-illegitimes", "Les arrestations préventives sont illégales et illégitimes"),
							"&nbsp;», Le Devoir, 12 juin 2012."
						)
					),
					". Les policiÈres ne peuvent pas arrêter préventivement des gens qui circulent sur un site ouvert au public en fonction de leur apparence ou de leurs opinions politiques, si aucun acte criminel n’a été commis ou s’ils n’ont pas les motifs raisonnables de croire qu’une violation de la paix est imminente",
					renvoi(
						$notes,
						array(
							"Marie-Ève Sylvestre, «&nbsp;",
							linkAnchor("http://ledevoir.com/societe/actualites-en-societe/352178/les-arrestations-preventives-sont-illegales-et-illegitimes", "Les arrestations préventives sont illégales et illégitimes"),
							"&nbsp;», Le Devoir, 12 juin 2012."
						)
					),
					". "
				)
			),
			paragraph(
				array(
					"Les arrestations effectuées lors du Grand prix étaient donc abusives et illégales en regard de cette analyse. Quant à l’interception de l’autobus, l’article 31 a été utilisé pour empêcher les individus d’atteindre le Cégep Lionel-Groulx et de participer à la manifestation. Aucune infraction précise n’a été invoquée par les officiers comme l’exige l’arrêt ",
					em("Brown"),
					". Leur arrestation et leur détention à une distance importante du cégep pour les empêcher de participer au piquetage est une utilisation détournée de l’article 31. L’article 31 n’a pas été appliqué dans le respect des droits fondamentaux des manifestantEs, notamment leur droit à la liberté d’expression, d’association et de réunion pacifique."
				)
			),
			chapterTitle($toc, "La légalité des fouilles "),
			paragraph(
				array(
					"Non seulement les arrestations préventives sont illégales, mais les fouilles sans motif le sont aussi. Règle générale, unE policiÈre doit avoir un mandat de perquisition pour fouiller une personne, sauf dans une situation de flagrant délit ou si la fouille est incidente à une arrestation légale. L’exception de l’objet bien en vue («&nbsp;plain view&nbsp;») ne s’applique pas au contenu d’un sac à dos ou sac de sport",
					renvoi(
						$notes,
						array(
							"R. c Buhay, [2003] 1 R.C.S. 631."
						)
					),
					". Dans tous les cas, les policiÈres doivent avoir des motifs raisonnables et probables de croire qu’une infraction a été commise ou est sur le point d’être commise. En 2011, la Cour suprême a spécifié que «&nbsp;si la raison d’être de la fouille est la découverte d’éléments de preuve, il doit y avoir des chances raisonnables de trouver des éléments de preuve de l’infraction pour laquelle l’accusé est arrêté&nbsp;»",
					renvoi(
						$notes,
						array(
							"R. c Golden, [2001] 3 R.C.S. 679, au para. 47."
						)
					),
					". Dans le cas qui nous concerne, non seulement les arrestations n’étaient pas légales mais les policiÈres procédaient aux fouilles non pas en raison de soupçons précis et individualisés, mais en raison de l’apparence physique, de l’âge, du port d’un sac à dos ou du carré rouge."
				)
			),
			paragraph(
				array(
					"Ces fouilles constituent donc une violation de la protection contre les fouilles et saisies abusives garantie par l’article 8 de la ",
					em("Charte canadienne"),
					" et 24 de la ",
					em("Charte québécoise"),
					"."
				)
			),
			notes($notes)
		)
	)
);
$carreRouge = array(
	section(
		$toc,
		array(
			image(
				"images/fromPDF/carrerouge.jpeg",
				"Le carré rouge : un symbole politique banni",
				null,
				"Photo © Darren Ell 2012"
			),
			sectionTitle($toc, "Le carré rouge : un symbole politique banni"),
			blockquote(
				array(
					paragraph("Ma chef de service m’a demandé de retirer mon carré rouge que je portais depuis le début du conflit étudiant. J’ai refusé de me plier à la directive et j’ai reçu un avis disciplinaire. Je sens que cette interdiction de porter le carré rouge ne passerait pas le test de la Charte des droits et libertés."),
					cite("Un employé d’une institution publique")
				)
			),
			paragraph("Au-delà des débats polarisés dans la sphère publique, la crise politique entourant la hausse des frais de scolarité s’est répercutée dans le secteur privé. Les témoignages montrent que les atteintes aux droits de la personne n’ont pas exclusivement été commises par l’État ou ses représentantEs. Au cœur de cette dynamique se retrouve le carré rouge, symbole politique d’appui aux revendications et aux moyens de pression mis de l’avant par le mouvement étudiant. En plus du ciblage par la police, deux situations types ressortent principalement des témoignages recueillis. Ainsi, plusieurs employéEs se sont fait interdire de porter le carré rouge sur leur lieu de travail sous peine de mesures disciplinaires. Au moins quinze personnes travaillant auprès de dix employeurs différents ont reçu des avertissements en ce sens. Parmi les employeurs, on compte notamment Renaud-Bray, Bombardier, Centre des congrès de Québec, Centre Jeunesse, ministère de l’Éducation, du Loisir et du Sport, Théâtre d’Aujourd’hui, Bibliothèque et Archives nationales, SAQ, Place Bonaventure et Postes Canada. Ceux et celles qui ne se pliaient pas à cette directive ont reçu des sanctions allant d’un avis disciplinaire écrit à une suspension temporaire sans salaire. "),
			paragraph("Dans certaines écoles primaires et secondaires du Québec, plusieurs élèves se sont fait réprimander pour avoir porté le carré rouge. Un étudiant a même été suspendu pour avoir distribué des carrés rouges dans l’enceinte de l’établissement scolaire."),
			paragraph("D’autres témoins rapportent s’être fait refuser l’accès aux transports en commun, au Complexe Desjardins, à La Ronde, au parc Jean-Drapeau, à des bars ou des restaurants, au pont Jacques-Cartier lors des feux d’artifice, à l’Assemblée nationale, sur la rue Crescent, et ce, parce qu’ils portaient le carré rouge. Plusieurs témoins affirment avoir enlevé délibérément leur carré rouge afin de ne pas subir de répression. Les policiÈres eux-mêmes ont suggéré aux manifestantEs de retirer leur carré rouge afin de ne pas être arrêtéEs."),
			paragraph(
				array(
					"Refuser l’accès à un lieu public ou à un service à une personne à cause du port du carré rouge constitue de la discrimination interdite selon l’article 10 de la ",
					em("Charte québécoise"),
					". Il s’agit d’un traitement discriminatoire fondé sur les convictions politiques, le port du carré rouge étant l’expression de la volonté de s’identifier au mouvement social de contestation de l’augmentation des frais de scolarité au Québec. "
				)
			),
			paragraph(
				array(
					"À cause de leurs convictions politiques affichées, des personnes se sont vues nier leur liberté d’expression et d’opinion, de même que leur droit à la dignité (art. 4 de la ",
					em("Charte québécoise"),
					") et leur droit d’accès aux moyens de transports et aux lieux publics (art. 15 C.Q.)",
					renvoi(
						$notes,
						array(
							"Mélanie Samson, «&nbsp;",
							linkAnchor("http://www.usherbrooke.ca/droit/fileadmin/sites/droit/documents/RDUS/volume_38/38-2-samson.pdf", "Le droit à l’égalité dans l’accès aux biens et aux services&nbsp;: l’originalité des garanties offertes pas la Charte québécoise"),
							"&nbsp;», (2008) 38 R.D.U.S. 413."
						)
					),
					"."
				)
			),
			notes($notes)
		)
	)
);

$loi12 = array(
	section(
		$toc,
		array(
			image(
				"images/fromPDF/loiSpeciale.jpeg",
				"Juristes opposés à la loi spéciale",
				null,
				"Photo © Mario Jean / MADOC 2012"
			),
			sectionTitle($toc,"La loi spéciale"),
			subsectionTitle($toc,"Présentation de la loi"),
			chapterTitle($toc, "La sanction du droit de grève"),
			paragraph(
				array(
					"Adoptée le 18 mai 2012, la ",
					em("Loi permettant aux étudiants de recevoir l’enseignement dispensé par les établissements de niveau postsecondaire qu’ils fréquentent (Loi 12)"),
					renvoi(
						$notes,
						array(
							linkAnchor("http://www2.publicationsduquebec.gouv.qc.ca/dynamicSearch/telecharge.php?type=5&amp;file=2012C12F.PDF", "Loi permettant aux étudiants de recevoir l’enseignement dispensé par les établissements de niveau postsecondaire qu’ils fréquentent"),
							", LQ 2012, c. 12."
						)
					),
					" a eu pour effet de mettre fin à l’application des mandats de grève des associations étudiantes. Près de quarante-cinq lois spéciales mettant fin à des grèves et forçant le retour au travail ont été adoptées au Québec, entre 1950 et 2011",
					renvoi(
						$notes,
						array(
							"Claudette Ross et al., Une typologie comparative des lois spéciales ordonnant le retour au travail et une évaluation de leur influence sur le climat des relations du travail, Centre de recherche en gestion, Document de travail no. 27-89, Montréal, Presses de l’Université du Québec à Montréal, 1989; François Delorme et Gaston Nadeau, «&nbsp;Un aperçu des lois de retour au travail adoptées au Québec entre 1964 et 2001&nbsp;» (2002) 57&nbsp;(4) Relations industrielles/ Industrial Relations 743; Radio-Canada, «&nbsp;",
							linkAnchor("http://www.radio-canada.ca/nouvelles/Politique/2012/05/31/003-lois-speciales-federales.shtml", "Regards sur les lois spéciales, à Québec et à Ottawa&nbsp;"),
							"», 31 mai 2012. "
						)
					),
					". Mais c’est la première fois de l’histoire qu’une loi spéciale s’applique dans le cadre d’une grève étudiante."
				)
			),
			paragraph(
				array(
					"Plusieurs dispositions de la Loi 12 relatives à la reprise des cours, à la responsabilité civile et aux sanctions administratives et pénales reprennent mot à mot certaines dispositions que l’on retrouve dans les autres lois d’exception en matière de relations de travail",
					renvoi(
						$notes,
						array(
							"Voir Loi concernant les conditions de travail dans le secteur public, L.Q. 2005, c. 43; Loi assurant la continuité de la prestation des services juridiques au sein du gouvernement et de certains organismes publics, L.Q. 2011, c. 2"
						)
					),
					". Les amendes prévues à la Loi 12 sont toutefois dix fois plus élevées et les restrictions au droit de manifester complètement inédites. Cette loi oblige, sous peine d’amende, les enseignantEs à donner leur cours sans égard au nombre d’étudiantEs présentEs en classe. Les étudiantEs et leurs associations ne peuvent entraver de quelque manière la tenue des cours, bloquer l’accès aux établissements ou aux locaux et tenir un rassemblement dans un rayon de 50 mètres de l’établissement. Les associations de salariéEs et les associations étudiantEs doivent prendre tous les moyens pour que leurs membres ne contreviennent pas à ces prescriptions."
				)
			),
			paragraph("Des sanctions administratives et pénales sont d’ailleurs prévues : suspension des cotisations à raison d’un trimestre par jour d’infraction et amendes de 25 000$ à 125 000$ par jour. Les administrateurs et administratrices de ces associations et syndicats s’exposent à des amendes de 7 000$ à 35 000$, les membres à des amendes de 1 000$ à 5 000$. Ces amendes doublent en cas de récidive. La sévérité des sanctions menace de faillite et de dissolution toute association étudiante souhaitant appliquer les mandats de grève."),
			
			chapterTitle($toc, "La sanction du droit de manifester"),
			paragraph("La loi oblige les organisateurs et organisatrices de manifestations de plus de 50 personnes à remettre à la police au moins huit heures à l’avance, la date, l’heure, le lieu de départ, les transports utilisés et l’itinéraire. En cas de non-respect des ces exigences, ils et elles s’exposent à des amendes allant de 7 000$ à 35 000$ et les associations à des amendes de 25 000$ à 125 000$. Notons que, suite à l’élection de septembre 2012,  la Loi 12 a été abrogée en grande partie, dont les dispositions portant sur les manifestations. "),
			paragraph(
				array(
					"Alors que le gouvernement Marois s’est empressé d’agir en ce sens, il apparaît contradictoire que les dirigeantEs de ce même gouvernement, nommément Madame Pauline Marois et Monsieur Jean-François Lisée",
					renvoi(
						$notes,
						array(
							"Cité dans «&nbsp;",
							linkAnchor("http://www.ledevoir.com/politique/quebec/374194/itineraires-des-manifestations-lisee-est-en-faveur-des-reglements-municipaux", "Les péquistes favorables à la divulgation des itinéraires des manifestations"),
							"&nbsp;»,",
							em(" Le Devoir"),
							", 26 mars 2013"
						)
					),
					", prétendent maintenant, et à tort, que le règlement P-6 de Montréal serait plus acceptable car moins sévère que la Loi 12. Soulignons seulement ici que la Loi 12 s’en prenait uniquement aux associations étudiantes et aux organisateurs de manifestation, alors que P-6 s’applique à toute personne prenant part à la manifestation. En ce sens, P-6 a une portée beaucoup plus large."
				)
			),
			chapterTitle($toc, "Les critiques de la loi"),
			paragraph(
				array(
					"L’adoption de cette loi a soulevé l’ire d’une grande partie de la population et a donné lieu aux manifestations quotidiennes des casseroles. La loi a aussi été dénoncée par plusieurs institutions et organisations, tel le Haut Commissariat aux droits de l’homme de l’ONU",
					renvoi(
						$notes,
						array(
							"Radio-Canada, «&nbsp;",
							linkAnchor("http://www.radio-canada.ca/nouvelles/Politique/2012/06/18/003-loi-78-onu.shtml", "Loi 78&nbsp;: la situation au Québec est alarmante selon l’ONU"),
							"&nbsp;», 18 juin 2012;  voir aussi ONU, «&nbsp;",
							linkAnchor("http://www.unog.ch/unog/website/news_media.nsf/(httpNewsByYear_fr)/4546E44DAB0DF99FC1257A0E005EC438?OpenDocument&amp;cntxt=2B47B&amp;cookielang=fr", "Des experts des Nations Unies préoccupés par les événements récents au Québec"),
							"&nbsp;», Genève, 30 mai 2012. "
						)
					),
					", le Barreau du Québec",
					renvoi(
						$notes,
						array(
							"Barreau du Québec, «&nbsp;",
							linkAnchor("http://www.barreau.qc.ca/fr/actualites-medias/communiques/2012/05/18-etudiants", "Le Barreau du Québec formule de sérieuses inquiétudes"),
							"&nbsp;», Communiqué, 18 mai 2012."
						)
					),
					", la ",
					em("Ligue des droits et libertés"),
					renvoi(
						$notes,
						array(
							"Ligue des droits et libertés, «&nbsp;",
							linkAnchor("http://www.ffq.qc.ca/wp-content/uploads/2012/05/fascicule-loi78.pdf", "Non à l’intimidation! Non à la loi 78!"),
							"&nbsp;», mai 2012."
						)
					),
					", ",
					em("Amnistie internationale"),
					renvoi(
						$notes,
						array(
							"Amnistie internationale, «&nbsp;",
							linkAnchor("http://amnistie.ca/site/index.php?Itemid=72&amp;catid=21%3Acommuniquinternationaux&amp;id=17712%3Aune-loi-quebecoise-porte-atteinte-aux-obligations-internationales-du-canada-&amp;option=com_content&amp;view=article", "Une loi québécoise porte atteinte aux obligations internationales du Canada"),
							"&nbsp;», 25 mai 2012."
						)
					),
					" et ",
					"l’",
					em("Association canadienne des libertés civiles"),
					renvoi(
						$notes,
						array(
							"Association canadienne des libertés civiles, «&nbsp;",
							linkAnchor("http://ccla.org/2012/05/22/lassociation-canadienne-des-libertes-civiles-denonce-les-vastes-et-graves-atteintes-aux-droits-constitutionnels-fondamentaux-inherentes-a-la-loi-78-du-quebec/?lang=fr", "L’Association canadienne des libertés civiles dénonce les vastes et graves atteintes aux droits constitutionnels fondamentaux inhérentes à la Loi 78 du Québec"),
							"&nbsp;», 22 mai 2012."
						)
					),
					". La ",
					em("Commission des droits de la personne et des droits de la jeunesse"),
					" a fait une analyse approfondie de cette loi",
					renvoi(
						$notes,
						array(
							"Commission des droits de la personne et des droits de la jeunesse, «&nbsp;",
							linkAnchor("http://www.cdpdj.qc.ca/publications/Documents/commentaires_PL_78.pdf", "Commentaires sur la Loi permettant aux étudiants de recevoir l’enseignement dispensé par les établissements de niveau postsecondaire qu’ils fréquentent"),
							"&nbsp;», 17 juillet 2012. "
						)
					),
					". Pour elle, la loi porte atteinte à la liberté d’expression, à la liberté de réunion pacifique, à la liberté d’association et à la liberté de conscience protégées par la ",
					em("Charte des droits et libertés de la personne"),
					" et ces atteinttes ne sont pas justifiées. Elle dénonce aussi le fait que plusieurs dispositions sont trop imprécises et ne permettent pas aux citoyenNEs de savoir s’ils participent ou non une manifestation illégale",
					renvoi(
						$notes,
						array(
							"Commission des droits de la personne et des droits de la jeunesse, «&nbsp;",
							linkAnchor("http://www.cdpdj.qc.ca/publications/Documents/commentaires_PL_78.pdf", "Commentaires sur la Loi permettant aux étudiants de recevoir l’enseignement dispensé par les établissements de niveau postsecondaire qu’ils fréquentent"),
							"&nbsp;», 17 juillet 2012, à la page 48"
						)
					),
					"."
				)
			),
			chapterTitle($toc, "L’interprétation fausse véhiculée à propos des dispositions sur la manifestation"),
			paragraph(
				array(
					"Les médias et les policiÈres ont véhiculé faussement que, non seulement les associations étudiantes et les organisateurs ou organisatrices commettaient des infractions s’ils et elles ne respectaient pas les exigences relatives aux manifestations, comme celle de fournir l’itinéraire huit heures à l’avance, mais que les individus participant à de telles manifestations pouvaient aussi être mis à l’amende. Cette mésinterprétation a été encouragée par la ministre de l’Éducation Michelle Courchesne. En disant que l’interprétation de la loi serait laissée aux tribunaux",
					renvoi(
						$notes,
						array(
							"Journal des débats de l’Assemblée nationale, vol. 42, no. 109, 17 mai 2012, aux pp. 6393-4 (Michelle Courchesne). "
						)
					),
					", la Ministre Courchesne laisait la porte ouverte à une application arbitraire puisque sans balise claire pour les policiÈres. Elle a même laissé entendre que le simple port du carré rouge était susceptible d’être sanctionné par les tribunaux",
					renvoi(
						$notes,
						array(
							"Journal des débats de l’Assemblée nationale, vol. 42, no. 109, 17 mai 2012, aux pp. 6397 (Michelle Courchesne). "
						)
					),
					"."
				)
			),
			paragraph(
				array(
					"Plus tard, lors de la requête en sursis des articles de la loi relatifs aux manifestations devant la Cour supérieure, le procureur général soutiendra que «&nbsp;les articles 16 et 17 ne visent pas les manifestants comme tels, mais uniquement les organisateurs et les associations qui participent aux manifestations. Les manifestations spontanées ne seraient pas prohibées, puisqu’elles ne sont “organisées” par personne&nbsp;»",
					renvoi(
						$notes,
						array(
							"Fédération étudiante collégiale du Québec (FECQ) c Québec (Gouvernement du), 2012 CanLII 2860 (QC CS) au para. 58."
						)
					),
					". "
				)
			),
			paragraph(
				array(
					"En fait, cette loi n’a jamais été appliquée pour sanctionner des manifestations qui ne la respectaient pas",
					renvoi(
						$notes,
						array(
							"La loi n’a pas non plus été appliquée à l’encontre d’organisateurs et organisatrices de manifestation ni pour des actions de blocage sur les campus. "
						)
					),
					". Les policiÈres l’ont invoquée pour déclarer que les manifestations étaient illégales, mais aucune accusation n’a été portée en vertu de cette loi. Dans plusieurs cas, les manifestantEs ont été arrêtéEs en vertu de cette loi, mais ont reçu des constats d’infraction en vertu du ",
					em("Code de la sécurité routière"),
					", comme ce fut le cas le 23 mai à Québec",
					renvoi(
						$notes,
						array(
							"Matthieu Boivin, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/le-soleil/actualites/justice-et-faits-divers/201205/23/01-4528070-manifestation-illegale-a-quebec-176-arrestations.php", "Manifestation illégale à Québec&nbsp;: 176 arrestations&nbsp;"),
							"», ",
							em("Le Soleil"),
							", 24 mai 2012."
						)
					),
					". Le Service de police de la ville de Québec a dit avoir choisi d’imposer les amendes moindres du ",
					em("Code de la sécurité routière"),
					" plutôt que celles plus élevées de la Loi 12",
					renvoi(
						$notes,
						array(
							"Jean-François Néron, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/le-soleil/actualites/justice-et-faits-divers/201205/24/01-4528170-arrestations-a-quebec-des-amendes-de-494.php", "Arrestations à Québec&nbsp;: des amendes de 494$&nbsp;"),
							"», ",
							em("Le Soleil"),
							", 24 mai 2012."
						)
					),
					". Le même scénario s’est déroulé le 28 mai quand les 84 personnes arrêtées en vertu de la Loi 12 ont reçu des constats d’infraction en vertu du ",
					em("Code de la sécurité routière"),
					renvoi(
						$notes,
						array(
							"Jean-François Néron, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/le-soleil/actualites/justice-et-faits-divers/201205/29/01-4529486-manifestation-illegale-a-quebec-84-arrestations.php", "Manifestation illégale à Québec&nbsp;: 84 arrestations&nbsp;"),
							"», ",
							em("Le Soleil"),
							", 28 mai 2012."
						)
					),
					"."
				)
			),
			paragraph(
				array(
					"De son côté, le SPVM a affirmé qu’il allait appliquer la loi avec discernement, en tolérant les manifestations contrevenant à la loi 12 mais restant pacifiques",
					renvoi(
						$notes,
						array(
							"Philippe Teisceira-Lessard, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/actualites/dossiers/conflit-etudiant/201205/19/01-4526960-le-spvm-appliquera-la-loi-speciale-avec-discernement.php", "Le SPVM appliquera la loi spéciale avec discernement&nbsp;"),
							"» ",
							em("La Presse"),
							", 19 mai 2012."
						)
					),
					". Les nombreuses personnes arrêtées lors des manifestations postérieures à l’adoption de la loi (270 le 20 mai, 108 le 22 mai, 514 le 23 mai) ont été accusées en vertu du règlement P-6. Un témoin interpellé le 23 mai raconte que la policière qui a procédé à son arrestation a admis ne pas savoir les motifs de celle-ci. "
				)
			),
			paragraph(
				array(
					"À Sherbrooke, le 21 mai, 36 personnes ont été arrêtées lors d’une manifestation pacifique sous prétexte que l’itinéraire n’avait pas été remis aux forces policières comme l’exigeait la loi",
					renvoi(
						$notes,
						array(
							"Véronique Larocque, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/la-tribune/faits-divers/201205/22/01-4527305-36-arrestations-a-sherbrooke-en-vertu-de-la-loi-78.php", "36 arrestations à Sherbrooke en vertu de la loi 78&nbsp;"),
							"», ",
							em("La Tribune"),
							", 22 mai 2012."
						)
					),
					". Le ",
					em("Service de police de Sherbrooke"),
					" (SPS) s’est rétracté trois jours plus tard en émettant les constats en vertu du ",
					em("Code de la sécurité routière"),
					renvoi(
						$notes,
						array(
							"Claude Plante, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/la-tribune/faits-divers/201205/24/01-4528268-la-police-de-sherbrooke-napplique-pas-la-loi-78.php", "La police de Sherbrooke n’applique pas la loi 78&nbsp;"),
							"», ",
							em("La Tribune"),
							", 24 mai 2012. "
						)
					),
			 		". Quelques jours plus tard, soit le 27 mai, une manifestation de 300 personnes dont le trajet était improvisé n’a pas été dispersée par le SPS et il n’y a eu aucune interpellation",
					renvoi(
						$notes,
						array(
							"Chloé Cotnoir, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/la-tribune/sherbrooke/201205/27/01-4529034-sherbrooke-resonne-au-son-des-casseroles.php", "Sherbrooke résonne au son des casseroles&nbsp;"),
							"», ",
							em("La Tribune"),
							", 27 mai 2012."
						)
					),
					"."
				)
			),
			paragraph(
				array(
					"À Bonaventure, le 22 mai, la police a toléré une manifestation sur la route 132 alors que l’itinéraire remis à la police ne le prévoyait pas",
					renvoi(
						$notes,
						array(
							"Johanne Fournier, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/le-soleil/actualites/education/201205/22/01-4527671-lest-du-quebec-se-mobilise-contre-la-loi-78.php", "L’Est-du-Québec se mobilise contre la loi 78&nbsp;"),
							"», ",
							em("Le Soleil"),
							", 23 mai 2012."
						)
					),
					". Même scénario à Chicoutimi où 300 personnes ont marché sans remettre d’itinéraire à la police, sans être inquiétées par les forces policières car il n’y avait pas eu de «&nbsp;casse&nbsp;»",
					renvoi(
						$notes,
						array(
							"Stéphane Bégin, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/le-quotidien/actualites/201205/23/01-4527758-plus-de-300-personnes-defient-la-loi.php", "Plus de 300 personnes défient la loi&nbsp;"),
							"», ",
							em("Le Quotidien"),
							", 23 mai 2012."
						)
					),
					". Le 24 mai à Trois-Rivières, une manifestation d’une centaine de personnes a été troublée par un automobiliste ayant happé une manifestante. La police a justifié sa passivité dans l’encadrement de la manifestation par le fait que l’itinéraire n’avait pas été fourni à l’avance",
					renvoi(
						$notes,
						array(
							"Marie-Ève Lafontaine, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/le-nouvelliste/justice-et-faits-divers/201205/25/01-4528724-brasse-camarade-a-la-manifestation-a-trois-rivieres.php", "Brasse-camarade à la manifestation à Trois-Rivières&nbsp;"),
							"», ",
							em("Le Nouvelliste"),
							", 25 mai 2012."
						)
					),
					". Le même soir, un rassemblement à Jonquière de plus de 200 personnes a bénéficié du soutien de la police pour la protection des manifestantEs bien que l’itinéraire n’ait pas été transmis. Il n’y a eu aucune arrestation",
					renvoi(
						$notes,
						array(
							"Louis Tremblay, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/le-quotidien/actualites/201205/25/01-4528528-tintamarre-a-jonquiere.php", "Tintamarre à Jonquière&nbsp;"),
							"», ",
							em("Le Quotidien"),
							", 25 mai 2012."
						)
					),
					"."
				)
			),
			paragraph(
				array(
					"Finalement, un mot sur la rentrée mouvementée à l’Université de Montréal. Le 28 mai 2012, jour de rentrée universitaire imposée par la loi spéciale, des centaines de policiÈres du SPVM et d’agentEs de sécurité ont envahi le campus de l’Université de Montréal à la demande de la direction de l’Université qui disait vouloir faire respecter la Loi 12. En plus de créer un climat de tension extrême et de donner lieu à des scènes particulièrement disgracieuses, il y a eu des interpellations brutales même dans les salles de classe. Seize personnes ont été arrêtées et dix d’entre elles ont été accusées de voies de fait. Aucune accusation n’a été portée en vertu de la Loi 12. En après-midi, l’Université a suspendu les cours des départements toujours en grève et pour les trois journées suivantes. Les syndicats des professeurEs, tout comme les étudiantEs et les associations étudiantes, ont déploré la présence policière sur le campus universitaire, qu’ils jugeaient inutile et provocante",
					renvoi(
						$notes,
						array(
							"Radio-Canada, «&nbsp;",
							linkAnchor("http://www.radio-canada.ca/regions/Montreal/2012/08/28/001-manif-udem-police.shtml", "Rentrée universitaire : 16 arrestations à l’UdeM"),
							"&nbsp;», 28 août 2012."
						)
					),
					"."
				)
			),
			notes($notes)
		)
	)
);
$injonctions = array(
	section(
		$toc,
		array(
			image(
				"images/fromPDF/injonctions.jpeg",
				"Les injonctions et la négation des droits collectifs",
				null,
				"Photo © Sylvie Béland 2012"
			),
			sectionTitle($toc,"Les injonctions et la négation des droits collectifs"),
			subsectionTitle($toc,"La pluie d’injonctions"),
			paragraph(
				array(
					"Entre le 30 mars et le 18 mai 2012, près de cinquante injonctions ou ordonnances de sauvegarde ont été émises par les tribunaux. Dans la grande majorité des cas, des étudiantEs dissidentEs demandaient à la cour d’ordonner aux associations étudiantes de cesser de bloquer l’accès aux salles de cours et aux établissements d’enseignement et de mettre tout en œuvre pour que les cours soient dispensés. Quatre requêtes ont été instituées par des établissements qui demandaient l’interdiction de blocage et de levée de cours",
					renvoi(
						$notes,
						array(
							"Université du Québec à Montréal, 4 avril 2012; Université du Québec à Chicoutimi, 5 avril 2012; Conservatoire de musique et d’art dramatique; 10 avril 2012 et Université de Montréal, 11 avril 2012."
						)
					),
					"."
				)
			),
			paragraph(
				array(
					"Bien que certains juges affirment «&nbsp;qu’il n’appartient pas au tribunal de s’immiscer dans un débat politique lancé suite à une hausse des frais de scolarité&nbsp;»",
					renvoi(
						$notes,
						array(
							em("Carrier c. Université de Sherbrooke"),
							", 2012 CanLII 1612 (QC CS), au para. 15."
						)
					),
					" ou que «&nbsp;les parties font appel aux tribunaux pour arbitrer un différend qui relève de la chose publique&nbsp;»",
					renvoi(
						$notes,
						array(
							linkAnchor("http://www.jugements.qc.ca/php/decision.php?liste=61672872&amp;doc=973032DA36FD73F7CCECDC2C78840119113E53C921B2DF95850A678F0ACD0D87&amp;page=3", "Combey c. Cégep de Saint-Laurent"),
							", 2012 CanLII 1731 (QC CS), au para. 1."
						)
					),
					", dès les premières causes, ils ont endossé le discours du gouvernement, qualifiant la grève de «&nbsp;douteuse&nbsp;» et préférant parler de «&nbsp;boycott&nbsp;»",
					renvoi(
						$notes,
						array(
							em("Déry c. Duchesne"),
							", 2012 CanLII 1563 (QC CS), au para. 2; au même effet voir ",
							em("Morasse c. Université Laval"),
							", 2012 CanLII 1565 (QC CS)."
						)
					),
					"."
				)
			),
			paragraph(
				array(
					"Dans une affaire concernant le Cégep St-Laurent, le juge s’emporte et dit que les associations  «&nbsp;prétendent à un droit de faire la “grève” sans contrôles, sans limites et sans encadrement. Cela s’appelle un droit de grève sauvage&nbsp;»",
					renvoi(
						$notes,
						array(
							em("Michaudville c. Cégep de St-Laurent"),
							", 2012 CanLII 1677 (QC CS), au para. 30."
						)
					),
					". Les juges n’ont reconnu aucun droit collectif aux associations étudiantes et n’ont accordé aucune prépondérance aux décisions prises démocratiquement par la majorité en assemblée générale."
				)
			),
			paragraph(
				array(
					"Dans leur article intitulé ",
					em("La liberté d’expression en contexte de crise&nbsp;: le cas de la grève étudiante"),
					", les auteurs",
					em(" Brunelle"),
					", ",
					em("Lampron"),
					" et ",
					em("Roussel"),
					" soulignent que:",
					blockquote(
						array(
							"«&nbsp;Il est déroutant de constater avec quelle indifférence le système de représentation collective mis en place par le législateur est ainsi détourné, au nom d’une logique purement individuelle qui banalise l’exercice de la démocratie participative étudiante. Si important soit-il, le droit civil, et la liberté contractuelle qu’il aménage, ne jouit pas d’une prépondérance sur tout autre droit. Si les étudiants regroupés en association ne sont pas tenus de respecter les décisions prises par une majorité d’entre eux, comment l’association étudiante parviendra-t-elle à bâtir la solidarité étudiante essentielle à l’établissement d’un certain rapport de force avec les autorités ?",
							renvoi(
								$notes,
								array(
									"Christian Brunelle, Louis-Philippe Lampron, Myriam Roussel, «&nbsp;",
									linkAnchor("http://www.erudit.org/revue/cd/2012/v53/n4/1013009ar.html", "La liberté d’expression en contexte de crise : le cas de la grève étudiante"),
									"&nbsp;», (2012) 53 (4) ",
									em("Cahiers de droit 831"),
									"."
								)
							),
							"&nbsp;»"
						)
					)
				)
			),
			paragraph(
				array(
					"Constatant un éparpillement, à partir du 1er mai, le juge en chef de la Cour supérieure, François Rolland, a pris les choses en main et s’est réservé toutes les injonctions à partir du 1",
					sup("er"),
					" mai. Il a encouragé les étudiantEs contestant la légalité de la grève étudiante à se joindre aux injonctions existantes pour éviter d’avoir à payer des frais d’avocats. Ses propos sur son exaspération face au non respect des injonctions — phénomène qu’il a qualifié de «&nbsp;dérapage social&nbsp;» — ont été grandement médiatisés. «&nbsp;On est à la douzième heure, pas à la onzième... Il y a péril. Il faut que quelqu’un intervienne&nbsp;», a-t-il déclaré",
					renvoi(
						$notes,
						array(
							"Christiane Desjardins, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/actualites/dossiers/conflit-etudiant/201205/02/01-4521224-greve-etudiante-le-juge-en-chef-sen-mele.php", "Grève étudiante : le juge en chef s’en mêle"),
							"&nbsp;», ",
							em("La Presse"),
							", 2 mai 2012."
						)
					),
					"."
				)
			),
			paragraph("Les injonctions qu’il a accordées sont plus sévères que celles de ses collègues en ce que non seulement elles enjoignent aux établissements de prendre tous les moyens pour que les cours soient dispensés mais en ce qu’elles leur ordonnent d’avoir recours aux forces policières pour ce faire. Les décisions du juge Rolland ne comprennent aucune véritable analyse, mais uniquement des attendus, presque toujours les mêmes d’un cas à l’autre, dont ceux-ci donnent le ton:"),
			blockquote(
				array(
					paragraph("[17] ATTENDU que le 16 février 2012, la sous-ministre adjointe à l’enseignement supérieur a informé les directeurs des collèges et universités que «&nbsp;la grève, contrairement à la situation d’un conflit entre un employeur et ses salariés, est plutôt un moyen de pression exercé en vertu d’un droit fondamental: La liberté d’expression, par conséquent, chaque étudiant est libre de se présenter à ses cours, si son établissement continue d’offrir la formation, et ce, sans consentement aux dispositions du code du travail interdisant les (briseurs de grève). [...]"),
					paragraph(
						array(
							"[26]&nbsp;ATTENDU que ce conflit a pris des proportions catastrophiques et cause aux étudiants un préjudice irréparable qui met en péril leur avenir professionnel compte tenu des résultats des demandes acceptées dans les Universités.",
							renvoi(
								$notes,
								array(
									em("Mahseredjian c. Collège Montmorency"),
									", 2012 CanLII 2276 (QC CS). Ces attendus sont repris dans les affaires suivantes: Doyon c. Cégep de Saint-Hyacinthe 2012 CanLII 2159 (QC CS), Carignan c. Collège Lionel-Groulx, 2012 CanLII 2023 (QC CS), L’Abbé c. Collège Ahuntsic, 2012 CanLII 215 (QC CS), Labbé c. Collège d’enseignement général et professionnel Édouard-Montpetit, 2012 CanLII 2155 (QC CS), Breton-Supper c. Cégep Marie-Victorin, 2012 CanLII 2019 (QC CS), El Madi c. Collège de Rosemont, 2012 CanLII 2018 (QC CS).Dans les prochaines affaires, l’attendu sur les propos de la sous-ministre a disparu, seul les deux autres demeurent: Bouchard c. Cégep André-Laurendeau, 2012 CanLII 2074 (QC CS), Lippé c. Cégep de Saint-Jérôme, 2012 CanLII 2144 (QC CS); Béchard c. Université du Québec à Montréal (UQAM), 2012 CanLII 2134 (QC CS)."
								)
							)
						)
					),
				)
			),
			chapterTitle($toc, "La condamnation de Gabriel Nadeau-Dubois pour outrage au tribunal"),
			paragraph(
				array(
					"La condamnation pour outrage au tribunal d’un des porte-parole de la CLASSE, Gabriel Nadeau-Dubois, a été vue par plusieurs comme la quintessence de la politisation du pouvoir judiciaire",
					renvoi(
						$notes,
						array(
							"Le titres des journaux sont éloquents: Josée Boileau, «&nbsp;",
							linkAnchor("http://www.ledevoir.com/societe/education/363089/troublant-jugement", "Gabriel Nadeau-Dubois - Troublant jugement"),
							"&nbsp;», Le Devoir, 3 novembre 2012, Yves Boisvert, «&nbsp;",
							linkAnchor("http://www.lapresse.ca/debats/chroniques/yves-boisvert/201211/07/01-4591492-la-culpabilite-douteuse-de-gnd.php", "La culpabilité douteuse de GND"),
							"&nbsp;», ",
							em("La Presse"),
							", 8 novembre 2012. "
						)
					),
					", en ce qu’un critère moral plutôt que juridique a été appliqué. Pour un collectif d’auteurs ayant signé une lettre dans ",
					em("Le Devoir"),
					", le jugement «&nbsp;s’explique en bonne partie par sa nature politique et son caractère idéologique, d’où sa généralité et son caractère moralisateur&nbsp;»",
					renvoi(
						$notes,
						array(
							"Collectif d’auteurs, «&nbsp;",
							linkAnchor("http://www.ledevoir.com/politique/quebec/363640/l-injustice-d-un-jugement", "L’injustice d’un jugement. Il est crucial de s’opposer à cette volonté d’empêcher tout militantisme inspiré"),
							"&nbsp;», ",
							em("Le Devoir"),
							",&nbsp; 10 novembre 2012.&nbsp; "
						)
					),
					"."
				)
			),
			paragraph(
				array(
					"Le juge Jacques de la Cour supérieure à Québec a vu dans les paroles de monsieur Nadeau-Dubois — à savoir qu’il était «&nbsp;légitime&nbsp;» pour les étudiantEs de «&nbsp;prendre les moyens pour faire respecter le choix démocratique qui a été fait d’aller en grève&nbsp;» — non pas l’expression d’une opinion mais une incitation à défier les injonctions. Ce faisant écrit le juge, «&nbsp;il prône plutôt l’anarchie et encourage la désobéissance civile&nbsp;»",
					renvoi(
						$notes,
						array(
							em("Morasse c. Nadeau-Dubois"),
							", 2012 CanLII 5438 (QC CS), au para. 95."
						)
					),
					". Pour les professeurs Beaudet et Trudel, monsieur Nadeau-Dubois n’a exprimé qu’une «&nbsp;opinion à caractère général sur la légitimité du recours aux injonctions dans le cadre du conflit étudiant&nbsp;»",
					renvoi(
						$notes,
						array(
							"Mireille Beaudet et Pierre Trudel, «&nbsp;",
							linkAnchor("http://www.ledevoir.com/societe/justice/363423/une-decision-qui-doit-etre-revue", "Condamnation de Gabriel Nadeau-Dubois - Une décision qui doit être revue"),
							"&nbsp;», ",
							em("Le Devoir"),
							", 7 novembre 2012. "
						)
					),
					", et nulle part dans ses propos ne retrouve-t-on de conseil, de recommandation ou de mot d’ordre. "
				)
			),
			paragraph(
				array(
					"Une telle limitation de la liberté d’expression constitue un précédent dangereux car cette décision judiciaire risque d’avoir un effet intimidant (",
					em("chilling effect"),
					") sur les porte-parole des associations étudiantes, des groupes de défense des droits et des groupes écologistes, féministes et syndicaux. Cette décision a été portée en appel."
				)
			),
			notes($notes)
		)
	)
);
$temoignages = array(
	section(
		$toc,
		array(
			image(
				"images/fromPDF/temoins.jpeg",
				"Témoins",
				null,
				"Photos © Darren Ell &amp; Philippe Montbazet 2012" 
			),
			sectionTitle($toc,"Les témoins nous parlent&nbsp;: perceptions et conséquences des interventions policières"),
			paragraph("En présentant un portrait des émotions, sentiments et impressions qui traversent les témoignages, cette section donne une voix aux personnes qui ont communiqué leurs expériences. Sur près de 400 témoignages, plus de deux cents personnes ayant observé ou expérimenté le travail policier ont parlé de leurs états affectifs (colère, indignation, peur, humiliation, etc.) et de leurs effets  psychologiques."),
			subsectionTitle($toc,"Sentiments et émotions recensés à travers les témoignages"),
			chapterTitle($toc, "«&nbsp;Mépris&nbsp;»,  «&nbsp;humiliation&nbsp;», «&nbsp;atteinte à la dignité&nbsp;»"),
			paragraph("Les trois quarts des 200 récits rapportent des propos insultants, condescendants, injurieux, méprisants ou des menaces de la part des policiÈres. Une personne sur dix a explicitement mentionné avoir éprouvé une atteinte à la dignité, de l’humiliation et du mépris de la part des policiÈres dans le cadre de fouille, de détention ou d’interrogatoire suite à une arrestation."),
			blockquote(
				array(
					paragraph("J’ai été traité comme un trophée de chasse lors de mon arrestation et de mon identification par prise de photo. Les policiÈres m’ont arraché au passage mon carré rouge pour le piétiner. Après avoir passé la nuit en cellule sans accès à mes médicaments, nu-pieds sur un plancher de béton, sans couverture et chauffage, j’ai été enchaîné jusqu’aux chevilles et serré exprès pour faire mal, j’ai subi beaucoup de pression, d’intimidation, des commentaires injurieux ainsi que des menaces lors de mon interrogatoire qui a eu lieu malgré l’absence de mon avocat."),
					cite("Manifestant arrêté lors du congrès libéral à Victoriaville")
				)
			),
			paragraph("De nombreuses personnes rapportent s’être fait faire la morale ou donner une leçon par des policiÈres. Certains mentionnent s’être sentis niaisés ou ridiculisés, et même avoir ressenti la perte du statut d’être humain. Ces témoignages décrivent un manque de respect de la part des policiÈres envers les personnes arrêtées."),						
			blockquote(
				array(
					paragraph("Un policier m’a attrapé par le bras. Je lui ai dit de ne pas me toucher ni me pousser, et il me répond «&nbsp;si je t’avais poussé, tu aurais revolé&nbsp;». J’ai demandé s’il s’agissait d’une menace et le policier m’a répondu sur un ton agressif&nbsp;«&nbsp;c’est une promesse&nbsp;». Il a roulé son vélo dans mon entrejambe en me disant de quitter les lieux. Secoué, j’ai rétorqué que je suis citoyen et qu’il me doit du respect, ce à quoi le policier m’a dit «&nbsp;t’es pas un citoyen, t’es un moron&nbsp;»."),
					cite("Une personne qui assistait par curiosité à l’arrestation d’une autre personne")
				)
			),
			chapterTitle($toc, "«&nbsp;Colère&nbsp;», «&nbsp;impuissance&nbsp;», «&nbsp;révolte&nbsp;» et «&nbsp;indignation&nbsp;» face aux comportements policiers"),
			paragraph("En réaction à diverses scènes de brutalité policière, près du quart des personnes ont mentionné dans leurs témoignages avoir ressenti de la colère, de la rage et de la nausée. Près de la moitié des 200 témoins ajoutent avoir été secoués, surpris et troublés par les événements. L’incompréhension et l’impuissance sont également manifestes face à des agissements jugés scandaleux et démesurés par rapport aux agissements des manifestantEs."),
			blockquote(
				array(
					paragraph("Je suis scandalisée par les méthodes d’action du SPVM. Un policier pointait volontairement son fusil à bombes assourdissantes vers les manifestantEs menottéEs assisES au sol, d’autres policiÈres nous insultaient et j’ai souffert d’une commotion cérébrale suite à un violent coup de matraque."),
					cite(" Une femme arrêtée lors d’une arrestation de masse")
				)
			),
			blockquote(
				array(
					paragraph("J’ai assisté incrédule à l’arrestation d’une brutalité inouïe d’un homme de petit gabarit par plusieurs policiÈres. L’homme ne montrait pas de signe de résistance. J’avoue m’être senti impuissant, car je craignais de ne me faire arrêter en aidant la victime."),
					cite("Un homme sortant d’un bar se trouvant par hasard près d’une manifestation nocturne")
				)
			),
			paragraph("Plusieurs personnes se sont dites outrées et scandalisées par le refus des policiÈres d’aider une personne blessée. De nombreuses personnes venant en aide à des blesséEs dans différentes situations ont analysé la situation d’une manière similaire en évoquant la colère et l’incompréhension. Des infirmières, un pompier et des secouristes ont constaté que certaines interventions policières comportaient d’importants risques d’aggravation de l’état des blessés."),
			blockquote(
				array(
					paragraph("Lors du blocage des bureaux de la CRÉPUQ le 7 mars 2012, je portais assistance à un homme paniqué et blessé à la figure et je me suis fait pousser par terre et donner des coups de matraque par cinq policiers, l’un d’eux me criant «&nbsp;criss de chienne, va t’en&nbsp;». Je suis révoltée par ce traitement, car j’estimais faire mon devoir de citoyenne. J’ai eu l’impression d’avoir servi de jouet&nbsp;aux policiers."),
					cite("Jeune femme participant à une manifestation de soutien ")
				)
			),
			paragraph("À l’instar d’une femme qui affirme&nbsp;: «&nbsp;on ne savait jamais comment réagir, car des mêmes évènements ne menaient pas aux mêmes actes policier&nbsp;», bon nombre de personnes partagent le sentiment que les opérations étaient arbitraires. Un témoin de manifestations nocturnes estime que la stratégie de la police était d’arrêter les manifestantEs, uniquement en raison de leur âge et de leur présence sur les lieux."),
			chapterTitle($toc, "«&nbsp;Peur&nbsp;», «&nbsp;menace&nbsp;» et «&nbsp;intimidation&nbsp;»"),
			paragraph("Plus du quart des témoignages évoquent la peur, l’intimidation ou la panique devant les opérations policières. Les témoignages les plus extrêmes parlent d’une crainte pour sa vie au moment d’interpellations particulièrement violentes et troublantes."),
			blockquote(
				array(
					paragraph("J’ai été prise en souricière et je me suis réfugiée sur la terrasse du bar le Saint-Bock. Aussitôt, les agentEs antiémeutes envoient beaucoup de poivre de Cayenne. J’avais peur pour ma vie, c’était irréel comme climat, car il s’agissait de policiÈres qui nous agressaient."),
					cite("Personne à la sortie du métro Berri-UQAM qui tentait de rentrer chez elle, 19 mai, Montréal")
				)
			),
			blockquote(
				array(
					paragraph("J’ai eu peur pour les jeunes et peur des policiÈres devant cette scène de répression."),
					cite("Une mère lors de l’intervention policière au cégep Lionel-Groulx, 15 mai")
				)
			),
			paragraph("D’autres témoins expriment avoir été intimidés par les policiÈres ou encore terrorisés par l’intensité de leur manière d’agir. Des dizaines de témoignages mentionnent un état de panique&nbsp;générale où des cris et des hurlements fusaient dans la foule en mouvement. Plus de vingt personnes ont senti que les circonstances étaient éminemment dangereuses pour leur intégrité physique, affirmant avoir éprouvé un sentiment de danger, d’agression et d’intimidation. Près d’une dizaine de personnes ont perçu de la rage et de la haine dans le regard des policiÈres."),
			blockquote(
				array(
					paragraph("Les policiÈres de l’antiémeute étaient dans un état de démence hargneuse et ont chargé comme des brutes et des animaux sauvages."),
					cite("Un manifestant lors d’une manifestation de nuit")
				)
			),
			blockquote(
				array(
					paragraph("J’ai perçu tellement de rage dans le regard des trois policiers qui me donnaient des coups de matraque contre une borne de paiement, que ça en était épeurant."),
					cite("Un manifestant lors d’une manifestation nocturne")
				)
			),
			paragraph("Près de cinquante personnes ont par ailleurs rapporté avoir reçu des menaces de violence physique, d’arrestation ou de représailles de la part des policiÈres."),
			blockquote(
				array(
					paragraph("Un policier m’a approché pour savoir si je supportais la cause étudiante. Il m’a ensuite dit que j’étais maintenant fiché comme un participant actif des manifestations et m’a menacé de venir me chercher s’il me «&nbsp;spottait&nbsp;» dans une foule de 500 personnes."),
					cite("Une personne approchée au hasard par un policier dans un parc")
				)
			),
			blockquote(
				array(
					paragraph("Un policier m’a poussé au hasard et m’a menacé de me donner une contravention et de m’arrêter pour utilisation d’une arme contre un policier, en l’occurrence une casserole utilisée pacifiquement. Il a ensuite menacé d’utiliser la menace de violence physique pour me faire quitter les lieux."),
					cite("Un homme qui marchait sur une piste cyclable")
				)
			),
			paragraph("De plus, une personne sur huit estime que les policiÈres cherchaient à intimider et à faire peur pour décourager de manifester au moyen de pratiques punitives telles la violence physique et les arrestations arbitraires. La grande majorité de ces témoignages parlent d’une stratégie de déligitimisation et de répression du mouvement. Près de dix témoins qualifient de piège certaines interventions et plusieurs autres racontent des situations de provocation de la part des policiÈres. Ils disent avoir eu l’impression que ces dernierEs étaient animéEs d’un sentiment de vengeance."),
			blockquote(
				array(
					paragraph("Les techniques des policiÈres servent à porter atteinte à la réputation du mouvement de contestation, à lui enlever de la crédibilité en l’associant à une menace."),
					cite(" La mère d’un mineur qui s’est fait détenir dans le métro de Montréal lors du Grand-Prix")
				)
			),
			blockquote(
				array(
					paragraph("Je suis convaincu que l’usage de la force était à des fins d’intimidation et que c’était complètement abusif."),
					cite(" Manifestant participant à une MaNUfestation")
				)
			),
			paragraph("De nombreux témoignages font état du sentiment d’être traqué, harcelé et ciblé par les policiÈres, parce qu’ils ou elles portent un masque, un symbole politique, des vêtements noirs ou encore étaient des habituéEs des manifestations ou filment les interventions policières. Une manifestante estime que la police a ainsi mené une guerre psychologique contre les militantEs."),
			blockquote(
				array(
					paragraph("Je suis de plus en plus inquiet, car j’ai l’impression que les policiÈres ciblent les habituéEs, pacifiques ou non. Il me semble que les corps policiers sont en guerre contre un mouvement social, contre une opinion."),
					cite("Manifestant ayant observé plusieurs rassemblements nocturnes à Montréal")
				)
			),
			blockquote(
				array(
					paragraph("Les policiÈres ont développé une tactique selon laquelle ils ciblent et arrêtent les personnes qui filment avant de procéder à des interventions de masse […] afin d’avoir le champ libre pour toutes sortes de pratiques, loin des caméras."),
					cite(" Un journaliste amateur")
				)
			),
			image(
				"images/fromPDF/intimidation.jpeg",
				"Intimidation",
				null,
				"Photo © Darren Ell 2012"
			),
			chapterTitle($toc, "«Violation des droits&nbsp;», «&nbsp;discrimination&nbsp;» et «&nbsp;profilage politique»"),
			paragraph("Sur l’ensemble des témoignages analysés, près de 70 font référence au sentiment d’injustice et à l’impression d’avoir été victime d’agissements arbitraires, de profilage politique, de discrimination ou d’abus de la part des policiÈres. Une vingtaine de personnes rapportent explicitement que leurs droits et libertés ont été violés, brimés ou bafoués, principalement le droit de réunion pacifique et la liberté d’expression."),
			blockquote(
				array(
					paragraph("Je me suis sentie bafouée dans mes droits d’avoir des idées politiques différentes du gouvernement, dans mes droits de manifester, et intimidée par les propos des policiÈres, humiliée, je n’ai été aucunement respectée et j’ai été victime d’abus de pouvoir injuste."),
					cite("Une enseignante de Cégep, victime d’une arrestation de masse à Québec")
				)
			),
			paragraph("Ces individus affirment que leur interpellation n’était pas basée sur de réels soupçons ou motifs raisonnables de croire qu’un crime avait été ou allait être commis. Plusieurs témoignages décrivent des interventions policières basées sur des signes distinctifs propres à un type de personne, tel que le fait de manifester ou de se trouver près d’une action de perturbation, d’être jeune ou de s’afficher politiquement en faveur de la cause étudiante en portant un carré rouge, ou simplement d’être vêtu de noir."),
			blockquote(
				array(
					paragraph("J’ai été victime de profilage politique. Les policiÈres m’ont interpellé et ont porté de fausses allégations de vol contre moi afin de fouiller mon sac."),
					cite("Une personne interpellée au métro Berri-UQAM")
				)
			),
			blockquote(
				array(
					paragraph("Je juge que moi et mes compagnons avons été victimes de profilage politique, d’estudiantophobie et de jeunisme. Mon arrestation était abusive et j’ai subi un flagrant abus de pouvoir de la part des forces de l’ordre."),
					cite(" Jeune homme qui portait le carré rouge, arrêté à la sortie d’un bar")
				)
			),
			paragraph("De nombreuses personnes abordent leur perception du rôle de la police en contexte de mobilisation sociale, que plusieurs d’entre elles qualifient de police politique. "),
			blockquote(
				array(
					paragraph("Je me suis senti pris en otage et j’ai eu l’impression de vivre dans un État policier. La situation était intenable et inadmissible."),
					cite("Une personne racontant l’arrestation de masse survenue à Gatineau le 18 avril")
				)
			),
			blockquote(
				array(
					paragraph("J’ai été victime de profilage, le représentant de la CSN qui était avec le groupe a pu partir alors qu’il était avec nous depuis le début. On voulait donc faire peur aux étudiantEs en les arrêtant de façon à ce qu’ils ne reviennent pas perturber la tenue des cours le lendemain."),
					cite(" Étudiante arrêtée lors d’une arrestation de masse en Outaouais")
				)
			),
			image(
				"images/fromPDF/profilage.jpeg",
				"Profilage Politique",
				null,
				"Photo © Darren Ell 2012"
			),
			subsectionTitle($toc,"Effets et conséquences de ces expériences"),
			chapterTitle($toc, "Peur de manifester, désengagement ou pérennisation militante"),
			paragraph("Plus de dix personnes ont mentionné que la peur et l’intimidation éprouvée face aux agissements policiers ont eu un effet dissuasif sur leur intention de manifester, par sentiment d’insécurité face à une menace ou un danger pressentis pour leur intégrité physique. Ces personnes craignent en outre les conséquences personnelles, judiciaires et professionnelles qu’implique une arrestation."),
			blockquote(
				array(
					paragraph("J’ai vu plusieurs personnes se faire blesser. J’ai beaucoup d’hésitation à retourner manifester."),
					cite("Un témoin d’une arrestation ciblée d’une manifestante par la brigade spéciale du SPVM")
				)
			),
			blockquote(
				array(
					paragraph("Je me suis fait frapper parce que je ne pouvais pas obéir aux ordres policiers de marcher plus vite avec mes douleurs aux genoux. Après cet événement, j’ai cessé de manifester, car la violence m’a refroidie. Je ne comprends pas pourquoi la police a frappé ainsi une personne aux cheveux blancs qui marchait seule et calmement."),
					cite(" Une femme d’âge mûr qui s’est fait donner plusieurs coups de matraque dans le dos")
				)
			),
			blockquote(
				array(
					paragraph("Je pleurais à la vue de cette brutalité policière inutile. Je ne peux pas croire que mon Québec en est là, que j’ai peur aujourd’hui d’aller manifester tranquillement, peur des policiÈres. Comment est-ce possible ?"),
					cite("Une manifestante regardant des scènes de brutalité policière sur CUTV")
				)
			),
			paragraph("Au contraire, une dizaine de personnes ont révélé que leur expérience avec la police avait renforcé leur engagement militant ou avait eu pour effet d’augmenter la fréquence et l’intensité de leurs activités politiques."),
			blockquote(
				array(
					paragraph("La brutalité dont j’ai été victime par un policier me pousse à recommencer à participer aux manifestations, pour vaincre cette peur et ne pas me laisser diriger par elle."),
					cite("Une manifestante")
				)
			),
			chapterTitle($toc, "Effets psychologiques et socioaffectifs "),
			paragraph("Près de trente personnes ont dit avoir constaté des impacts psychologiques, physiques et socioaffectifs en raison d’un événement problématique impliquant des policiÈres. Les récits les plus marquants parlent d’état de choc, de traumatisme ou de choc post-traumatique, de moment traumatisant ou souvenir douloureux, de dépression nerveuse, de dommages psychologiques, de difficulté à dormir, de stress et de paranoïa. Dans plusieurs cas, ces dommages sont accompagnés d’incidences néfastes dans la vie personnelle et professionnelle. Notons qu’une dizaine de témoignages mentionnent qu’en raison du choc subi, c’est unE amiE, un membre de la parenté ou une travailleuse ou un travailleur social qui avait rédigé le témoignage."),
			blockquote(
				array(
					paragraph("Je me suis fait rentrer dedans par l’antiémeute, matraquer et arrêter de manière musclée. J’ai eu un choc post-traumatique et une dépression considérable suite à cet événement. J’ai perdu mes deux emplois et je suis incapable de conduire ma voiture. J’ai tout perdu."),
					cite("Un père de famille d’âge mûr arrêté au hasard en sortant d’une salle de spectacle")
				)
			),
			blockquote(
				array(
					paragraph("J’ai été détenu pendant six heures et mon arrestation brutale m’a traumatisé pendant plusieurs semaines. J’ai vécu beaucoup de stress, j’ai eu de la misère à dormir et des sautes d’humeur."),
					cite("Un manifestant arrêté pour port du masque")
				)
			),
			chapterTitle($toc, "Perte de confiance en la police"),
			paragraph("À travers les deux cents témoignages recensés dans cette section, une personne sur huit rapporte que sa confiance en la police a été fortement ébranlée ou totalement rompue, certaines spécifiant qu’avant les événements, elles avaient une bonne opinion de la police."),
			blockquote(
				array(
					paragraph("J’ai été blessée et poussée à terre par les policiÈres antiémeutes. Ils m’ont touchée, ils m’ont blessée, ils m’ont ignorée. J’ai peur de l’antiémeute, peur de la police. Ces blessures sont plus graves qu’une oreille qui disjoncte."),
					cite("Une étudiante qui a souffert des grenades assourdissantes")
				)
			),
			blockquote(
				array(
					paragraph("J’étais fortement intimidée par la situation tellement ces arrestations massives [et] abusives étaient surréelles. Chaque fois que mon regard croise un policier, je tremble et la peur m’envahit."),
					cite("Une manifestante arrêtée lors d’une arrestation de masse et détenue plusieurs heures")
				)
			),
			paragraph("En ce sens, plusieurs personnes expriment que la police ne protège plus la population, mais plutôt les intérêts d’une minorité. Ces personnes expriment la rancœur envers la police en général et leur attitude anti-professionnelle qui fait honte&nbsp;à la profession.  Plus de quinze témoins font état de fausses allégations de la part de policiÈres."),
			blockquote(
				array(
					paragraph("Leur intransigeance et mauvaise foi nous empêcheront de croire encore que la police est là pour nous servir et nous protéger."),
					cite(" Une personne interpellée et fouillée au métro Berri-UQAM")
				)
			),
			chapterTitle($toc, "Perte de confiance dans les mécanismes de déontologie policière"),
			paragraph("De nombreux témoignages ont rapporté un profond désarroi et une perte de confiance dans les mécanismes de déontologie policière. Dans certains cas, les policiÈres ont même découragé les individus de porter plainte."),
			blockquote(
				array(
					paragraph("Je suis allée à un poste de police à Longueuil pour m’informer des procédures pour déposer une plainte. Je m’y suis fait dire que c’était dangereux&nbsp;de faire une plainte contre la police."),
					cite("Une manifestante qui s’est fait tabasser par quatre policiers")
				)
			),
			blockquote(
				array(
					paragraph("Je me suis fait ridiculiser au poste de quartier&nbsp;21 quand je demandais un formulaire pour déposer une plainte en déontologie. Les policiers m’ont répondu&nbsp;«&nbsp;on ne peut pas t’aider, c’est tu plate, Anonymous a piraté notre site Internet&nbsp;!&nbsp;»."),
					cite("Une mère dont l’amie s’est fait donner un coup de pied au ventre par un policier dans le métro")
				)
			),
			paragraph("Près d’une centaine de témoins disent que les policiÈres ont refusé de divulguer leur numéro de matricule et une dizaine dit avoir reçu des menaces de représailles si elles ou ils portaient plainte. Les policiÈres ridiculisaient les mécanismes de plainte en déontologie, mettant au défi les plaignantEs &nbsp;de gager que ça ne servira à rien» ou encore se réjouissant que les congés payés leur permettent de partir en voyage. "),
			paragraph("D’autre part, une dizaine de personnes ayant déjà fait des plaintes en déontologie soutiennent avoir été victimes de représailles (brutalité, arrestation, constat d’infraction) de la part des policiÈres concernéEs. Dans bien des cas, après le dépôt de leur plainte, les agentEs en question interpellaient les personnes pendant les manifestations en leur disant «&nbsp;Te souviens-tu de moi?» "),
			paragraph("Pratiquement l’ensemble des personnes ayant rapporté avoir perdu confiance en la police croient que les policiÈres jouissent d’impunité dans l’exercice de leurs fonctions, certain prenant pour preuve que la constante présence de caméras qui filment leurs agissements ne les empêchent pas d’abuser de leurs pouvoirs."),
			
			chapterTitle($toc, "Perte de confiance dans l’État de droit"),
			paragraph("Enfin, une dizaine de témoins soulignent que leurs expériences avec des policiÈres avaient modifié la façon dont ils conçoivent la démocratie et l’État québécois. Certains analysent la façon dont le gouvernement a géré le conflit étudiant en envoyant la police et font référence à des régimes dictatoriaux pour rendre compte des événements qu’ils ont vécus."),
			blockquote(
				array(
					paragraph("Je suis indigné par ce traitement liberticide et indigne d’un État de droit."),
					cite("Un manifestant encerclé et brutalisé par la police qui a réussi à se sauver d’une souricière")
				)
			),
			blockquote(
				array(
					paragraph("Cette arrestation brutale m’a traumatisé pendant plusieurs semaines et je ne vois plus mon État démocratique et libre de la même façon."),
					cite("Un manifestant")
				)
			),
			image(
				"images/fromPDF/perteConfiance.jpeg",
				"Perte de confiance dans l’État de droit",
				null,
				"Photo © Mario Jean / MADOC 2012"
			),
			notes($notes)
		)
	)
);
$conclusion = array(
	section(
		$toc,
		array(
			sectionTitle($toc,"Conclusion"),
			subsectionTitle($toc,"Violations des droits et libertés"),
			chapterTitle($toc, "Atteintes aux libertés d’expression, de réunion pacifique et d’association"),
			paragraph("La liberté d’expression est le souffle même de la démocratie. Elle englobe tous les messages aussi impopulaires, dérangeants ou contestataires soient-ils. Non seulement le contenu du message est-il protégé mais également le véhicule de transmission du message, comme la manifestation, le piquetage, la distribution de tracts, l’affichage, le boycott et la liberté de presse."),
			paragraph("Deux questions fondamentales se posent par rapport au respect, lors de la grève étudiante, des libertés d’expression et de réunion pacifique."),
			paragraph("En employant de façon massive et indiscriminée diverses armes, gaz, balles de plastique, bombes assourdissantes, chevaux, chiens et autres, les autorités ont-elles porté atteinte à la liberté d’expression et de réunion pacifique&nbsp;?"),
			paragraph("En procédant à des arrestations aussi nombreuses et massives lors de manifestations pacifiques, en distribuant des constats d’infractions à tout vent, en détenant préventivement des centaines de citoyenNEs, les autorités ont-elles porté atteinte à la liberté d’expression et de réunion pacifique&nbsp;?"),
			paragraph("La réponse à ces questions est oui.", 'underlined'),
			paragraph("L’emploi de moyens de répression disproportionnés a violé la liberté d’expression des manifestantEs d’une manière qui ne peut se justifier dans une société libre et démocratique."),
			paragraph("Quant à la liberté d’association, elle a aussi été mise à mal par les autorités politiques qui, par leur discours, leurs gestes et leurs décisions ont nié les droits collectifs des associations étudiantes."),
			paragraph("La répression a été si grande, les arrestations si nombreuses, l’attitude des policiÈres si méprisante et brutale qu’une partie de la population a carrément peur maintenant de sortir dans la rue pour manifester ses opinions et sa dissidence."),
			blockquote(
				array(
					paragraph("Ce soir je n’irai pas à la manifestation contre la brutalité policière."),
					paragraph("Parce que j’ai peur. Parce qu’ils ont réussi à me faire frémir à toutes les fois que j’entends une sirène de police. Parce que le bruit de leur ostie d’hélicoptère me fait trembler. Parce que chaque fois que je les entends crier «Bouge» ou taper sur leurs boucliers comme des barbares, mon sang se glace."),
					paragraph("Pourtant, il y aurait tant de raisons. Le G-20. Toutes ces arrestations illégales durant la grève. Le mépris quotidien. Mes camarades marquéEs physiquement et psychologiquement par leur violence pour le reste de la vie."),
					paragraph("Je suis conscient qu’en n’y étant pas, je donne raison à leur répression. Que c’est justement le but recherché par leurs manœuvres. De nous casser. Ce soir, ils ont gagné contre moi."),
					paragraph("Je n'abandonne pourtant pas la lutte. Ils me reverront des centaines de fois dans la rue dans les années à venir."),
					paragraph("Mais ce soir, j’ai trop peur. J’aurais aimé être dans la rue à vos côtés, mais je n’y arrive pas."),
					paragraph("En attendant, ce que j’aimerais par dessus tout, c’est de vous remercier, le plus humblement du monde, mes camarades qui prendront la rue ce soir. Parce qu’il le faut. Toute ma solidarité est avec vous.  C’est grâce à vous, à votre courage, que peut subsister la lutte."),
					paragraph("Vous avez tout mon respect et mon admiration."),
					cite("Keena Grégoire, 15 mars 2013")
				)
			),

			chapterTitle($toc, "Atteinte au droit à l’intégrité et à la sécurité de la personne "),
			paragraph(
				array(
					"L’utilisation d’armes et l’usage d’une force excessive portent évidemment atteinte au droit à la vie et à la sécurité de la personne. Le recours aux balles de plastique n’est ni justifié ni raisonnable à cause des blessures graves et même de la mort qu’elles peuvent causer",
					renvoi(
						$notes,
						array(
							"Voir à ce propos le rapport de la Ligue des droits et libertés, ",
							linkAnchor("http://liguedesdroits.ca/wp-content/fichiers/rap-2002-05-14-balles_de_plastique.doc", "Rapport sur l’utilisation des balles de plastique lors de manifestations"),
							", 14 mai 2002."
						)
					),
					". Leur utilisation contre des personnes non menaçantes qui n’avaient reçu aucun ordre des policiÈres ou qui essayaient d’obéir à un ordre est particulièrement injustifiable. L’emploi abusif et injustifié d’armes chimiques a causé des dommages physiques importants à nombre de manifestantEs."
				)
			),
			paragraph(
				array(
					"Au regard des témoignages récoltés, il est dans l’intérêt public et dans l’intérêt de la justice que la lumière soit faite sur les comportements des forces de l’ordre. Les abus physiques et verbaux doivent être sanctionnés afin de ne pas déconsidérer la perception de la justice par la population et de ne pas favoriser l’impunité pour la commission des violations graves de droits humains. Les protocoles d’action des forces de l’ordre en contexte de manifestation doivent être rendus publics et révisés de sorte que ceux-ci soient, dans leur libellé comme dans leur application, en conformité avec le ",
					em("Code de déontologie des policiers"),
					", la ",
					em("Charte des droits et libertés de la personne"),
					" et le droit international des droits de la personne. En outre, comme le réclame la ",
					em("Ligue des droits et libertés"),
					" depuis plusieurs années et comme elle l’explique dans son mémoire déposé à la ",
					em("Commission des institutions"),
					" et intitulé ",
					em("Avoir le courage politique d’assurer des enquêtes indépendantes"),
					renvoi(
						$notes,
						array(
							"Ligue des droits et libertés, ",
							linkAnchor("http://liguedesdroits.ca/wp-content/fichiers/memoire-ligue-pl-12-mars2013.pdf", "Avoir le courage politique d’assurer des enquêtes indépendantes"),
							", Mémoire présenté à la Commission des Institutions de l’Assemblée Nationale, 12 mars 2013."
						)
					),
					", il est urgent de mettre sur pied un processus d’enquêtes indépendantes, civiles, transparentes et impartiales."
				)
			),
			chapterTitle($toc, "Atteintes aux droits judiciaires "),
			paragraph(
				array(
					"Le présent rapport indique une violation systématique de la protection constitutionnelle contre les arrestations et les détentions arbitraires (notamment les détentions en vertu des règlements municipaux et en vertu de l’article 31 du ",
					em("Code criminel"),
					"), de même que la protection contre les fouilles abusives. Des militantEs ont été illégalement photographiéEs, fichéEs et interrogéEs. Plusieurs conditions de libération imposées aux manifestantEs étaient abusives, voire inconstitutionnelles. Dans bien des cas, le droit de recourir sans délai aux services d’unE avocatE n’a pas été respecté. Le droit d’être informé sans délai des motifs de son arrestation et de l’infraction précise reprochée a aussi été violé systématiquement. Plusieurs personnes arrêtées sont restées plusieurs heures dans des autobus ou ailleurs dans des conditions portant atteinte à la dignité de la personne."
				)
			),
			chapterTitle($toc, "Atteinte au droit à l’égalité et profilage politique"),
			paragraph(
				array(
					"La ",
					em("Charte québécoise"),
					" garantit à tous et à toutes le droit à l’égalité sans discrimination fondée notamment sur l’âge et les convictions politiques. Lorsque les convictions politiques, réelles ou présumées, d’une personne ou d’un groupe constituent l’un des facteurs qui suscite une intervention policière, il y a profilage politique. Le profilage politique est discriminatoire puisque les personnes ciblées subissent un traitement inhabituel, différent de celui autres citoyenNEs, sur la base de préjugés. Pendant le printemps érable, des gens ont fait l’objet de surveillance policière accrue, d’interpellations ou d’arrestations arbitraires, de poursuites judiciaires abusives et de brutalité policière en raison de leurs convictions politiques telles que perçues par les policiÈres et non pas toujours pour des infractions réelles qu’ils et elles auraient commises."
				)
			),
			paragraph("Le profilage politique dont ont fait l’objet les étudiantEs et les manifestantEs en général constitue de la discrimination systémique en ce sens qu’elle est le fruit non pas d’une pratique isolée, mais de l’effet combiné des directives et de pratiques policières et judiciaires institutionnalisées, ainsi que de normes législatives et réglementaires spécifiques."),
			subsectionTitle($toc,"L’incohérence dans la discrétion policière"),
			paragraph(
				array(
					"Une étude datant de 1974 démontre avec force que, dans l’application de la loi pénale, les policiÈres jouissent d’une discrétion énorme&nbsp;: arrêter ou avertir, donner une contravention ou déclencher le processus judiciaire",
					renvoi(
						$notes,
						array(
							"Brian Allen Grosman, Police Command. Discretion &amp; Decision, Toronto Macmillan of Canada, 1975.  Il s’agit d’une enquête sur l’exercice de la discrétion policière menée dans cinq villes canadiennes et trois villes américaines."
						)
					),
					". Quand les normes sont vagues, imprécises ou de portée potentiellement trop large, la discrétion policière augmente ce qui représente un potentiel énorme de prise de décision arbitraire basée sur des considérations morales et émotionnelles."
				)
			),
			paragraph(
				array(
					"Notre rapport démontre que les forces policières ont appliqué diverses normes, règlements et lois, de façon totalement arbitraire. Les règlements municipaux, le ",
					em("Code de la sécurité routière"),
					", le ",
					em("Code criminel"),
					" et la loi spéciale ont fait l’objet d’application sélective. Il est impossible de suivre la logique des forces policières. Parfois, lors de manifestations — illégales au regard du règlement mais néanmoins pacifiques — elles n’arrêtaient personne, parfois elles procédaient à l’arrestation de quelques personnes, et d’autres fois, à l’arrestation de centaines de personnes."
				)
			),
			paragraph(
				array(
					"Les auteurs de l’étude mentionnée ci-haut expliquent que des normes vagues d’application sélective permettent à la police de développer des tactiques de harcèlement contre des groupes particuliers et de stigmatiser selon leurs propres valeurs, selon leur perception des demandes des citoyenNEs ou des commerçantEs, en fonction de la couleur de la peau, du ",
					em("look"),
					", de l’âge, du statut, du lieu géographique. Au cours de la grève étudiante, la majorité des arrestations ont été faites sans égard à la commission d’actes répréhensibles. Les témoignages recueillis laissent croire que le véritable objectif des forces de l’ordre n’était pas de mettre fin à un comportement dangereux dans le but d’assurer la sécurité publique mais plutôt de mater une protestation sociale et d’intimider, par tous les  moyens possibles, y compris l’application arbitraire de règlements municipaux ou autres normes, les personnes exerçant leur liberté d’expression et communicant un message qui, apparemment, dérangeait."
				)
			),

			subsectionTitle($toc,
				array(
					"La judiciarisation du politique et la politisation du judiciaire",
					renvoi(
						$notes,
						array(
							"Expression empruntée à l’éditorial du numéro 47 du magazine À babord, Politisation du juridique - Judiciarisation du politique. "
						)
					)
				)
			),
			paragraph("Il est extrêmement dangereux pour la liberté d’expression et le droit de réunion pacifique que cette tendance lourde à la judiciarisation et à la criminalisation de la contestation sociale s’installe de manière durable au Québec. Lorsque, en plus de certains médias, l’État lui-même étiquette et discrédite publiquement des catégories de citoyenNEs, en les qualifiant d’irresponsables, de violentEs, de délinquantEs, d’exemples de la honte, non seulement il porte atteinte à leur dignité, mais il justifie la répression à leur égard."),
			paragraph("Le fait que les injonctions n’aient pas été respectées, que les cours n’aient pas été dispensés, que la loi spéciale n’ait été ni respectée ni appliquée, que, malgré la répression politique, policière et judiciaire, la grève étudiante ait continué et ait entraîné un mouvement social de protestation, signifie forcément que cette répression judiciaire n’emportait pas l’adhésion générale."),
			image(
				"images/fromPDF/conclusion.jpeg",
				"La grève est étudiante, la lutte est populaire",
				null,
				"Photo © Mario Jean / MADOC 2012"
			),
			notes($notes)
		)
	)
);
$recommandations = array(
	section(
		$toc,
		array(
			sectionTitle($toc,"Recommandations"),
			paragraph("Compte tenu de ce qui précède, les trois organismes font les recommandations suivantes :"),
			numberList(
				array(
					listItem(
						span(
							array(
								"Abandon des accusations portées en vertu des règlements municipaux et du ",
								em("Code de la sécurité routière"),
								" et arrêt des procédures pour ceux et celles dont les droits ont été violés."
							)
						)
					),
					listItem(
						span("Tenue d’une enquête publique sur les abus policiers, les arrestations massives et les violations des droits et libertés découlant de l’intervention policière pendant la grève étudiante.")
					),
					listItem(
						span(
							array(
								"Interdiction immédiate de l’usage de balles de plastique, des grenades assourdissantes et autres armes à ",
								em("létalité réduite"),
								" comme technique de contrôle de foule."
							)
						)
					),
					listItem(
						span(
							array(
								"Tenue d’une enquête par la ",
								em("Commission des droits de la personne et des droits de la jeunesse"),
								" sur le profilage politique et les atteintes massives à la liberté d’expression au Québec."
							)
						)
					),
					listItem(
						span("Abrogation immédiate du règlement P-6 de la Ville de Montréal et des autres règlements municipaux limitant le droit de manifester.")),
					listItem(
						span(
							array(
								"Arrêt immédiat de l’utilisation par les corps policiers de l’article 31 du ",
								em("Code criminel"),
								" et des articles 500 et 500.1 du ",
								em("Code de la sécurité routière"),
								" lors des manifestations."
							)
						)
					),
					listItem(
						span("Mise en place d’un mécanisme à caractère civil, transparent, impartial et indépendant, chargé d’enquêter dans tous les cas où des interventions policières ont pour conséquence de causer la mort ou d’infliger des blessures à une personne&nbsp;; élargissement du mandat de l’instance créée afin que celle-ci ait le pouvoir d’initier des enquêtes systémiques sur le comportement des policiÈres, notamment lors d’événements comme ceux survenus lors du printemps étudiant de 2012.")
					)
				)
			),
			notes($notes)
		)
	)
);
$bilanArrestations = array(
	section(
		$toc,
		array(
			sectionTitle($toc,"Annexe 1 - Bilan global des arrestations"),
			chapterTitle($toc, "La méthodologie de recension des arrestations"),
			paragraph(
				array(
					"Dressé à partir du suivi des arrestations effectué par le comité légal de la CLASSE et du bilan des arrestations du Collectif opposé à la brutalité policière, ce bilan recense les arrestations effectuées pendant la période de grève étudiante, soit du 16 février au 3 septembre 2012. Il inclut les arrestations ayant mené à des accusations criminelles ou à des constats d’infraction. Ce bilan inclut également les cas de personnes ayant été détenues pendant une période prolongée, sans toutefois avoir fait l’objet d’accusations ou de constats d’infraction",
					renvoi(
						$notes,
						array(
							"Mentionnons que ce bilan ne tient pas compte des constats d’infraction envoyés par la poste sans que la personne n’ait été informée de l’illégalité potentielle de son geste. Ainsi à Gatineau, le 18 avril 2012, 161 personnes ont été arrêtées, mais 221 ont reçu un constat d’infraction pour le même événement."
						)
					),
					"."
				)
			),
			paragraph("Nous évaluons donc que 3509 personnes ont été arrêtées durant cette période. De ce nombre, au moins 471 ont mené à des accusations criminelles, et 2433 arrestations ont mené à des constats d’infraction. 605 autres personnes ont été interpellées ou arrêtées avec des conséquences inconnues."),
			chapterTitle($toc, "Total des arrestations&nbsp;: 3509"),
			paragraph("Nombre d’arrestations qui ont mené à des accusations criminelles&nbsp;: 471"),
			paragraph(
				array(
					"Nombre d’arrestations qui ont mené à des constats: 2433",
					br(),
					"Dont 817 constats liées au ",
					em("Code de la sécurité routière"),
					renvoi(
						$notes,
						array(
							"Ce chiffre est tiré de la ",
							linkAnchor("http://cobp.resist.ca/documentation/compilation-des-arrestations-pour-larticle-5001-du-code-de-la-s-curit-routi-re-du-qu-0", "compilation du Collectif opposé à la brutalité policière"),
							" sur l’article 500.1 du Code de la sécurité routière. "
						)
					),
					br(),
					"Dont 1616 constats liées à des règlements municipaux"
				)
			),	
			paragraph("Autres arrestations ou interpellations avec des conséquences inconnues&nbsp;: 605"),
			notes($notes),
			table(
				array(
					tableHeaderRow(
						array("Date (2012)", "Événement", "Arrestations")
					),
					tableRow(
						array("16 février", "Occupation au cégep du Vieux Montréal", "37")
					),
					tableRow(
						array("16 février", "Blocage de la Tour de la bourse à Montréal", "4")
					),
					tableRow(
						array("7 mars", "Occupation et manifestation devant les bureaux de Loto-Québec / CRÉPUQ à Montréal", "5")
					),
					tableRow(
						array("7 mars", "Vigile de soir à Montréal", "2")
					),
					tableRow(
						array("12 mars", "Blocage à l’Université Laval à Québec", "3")
					),
					tableRow(
						array("12 mars", "Maison de la grève à Montréal", "5")
					),
					tableRow(
						array("15 mars", "Manifestation contre la brutalité policière à Montréal", "227")
					),
					tableRow(
						array("20 mars", "Blocage du Pont Champlain à Montréal", "80")
					),
					tableRow(
						array("21 mars", "Piquetage à l’Université Laval à Québec", "1")
					),
					tableRow(
						array("26 mars", "Manifestation à l’Université de Montréal", "1")
					),
					tableRow(
						array("26 mars", "Occupation des bureaux de la Fédération des cégeps à Montréal", "2")
					),
					tableRow(
						array("27 mars", "Siège social de la SAQ à Montréal", "1")
					),
					tableRow(
						array("27 mars", "Blocage de la route 410 à Sherbrooke", "60")
					),
					tableRow(
						array("27 mars", "Manifestation à Québec", "1")
					),
					tableRow(
						array("28 mars", "Blocage de la résidence du premier ministre Jean Charest à Québec", "14")
					),
					tableRow(
						array("29 mars", "Grande mascarade à Montréal", "3")
					),
					tableRow(
						array("29 mars", "Université du Québec à Chicoutimi", "15")
					),
					tableRow(
						array("29 mars", "Occupation du poste de police à Montréal", "2")
					),
					tableRow(
						array("4 avril", "Action de perturbation à Montréal", "77")
					),
					tableRow(
						array("5 avril ", "Manifestation étudiante à Chicoutimi", "1")
					),
					tableRow(
						array("11 avril", "Blocage du siège social de la Banque nationale à Montréal", "1")
					),
					tableRow(
						array("11 avril", "Manifestation illimitée à Montréal", "4")
					),
					tableRow(
						array("12 avril", "Sûreté du Québec à Montréal", "1")
					),
					tableRow(
						array("13 avril", "Occupation du bureau de circonscription de la ministre de l’éducation à Montréal", "11")
					),
					tableRow(
						array("13 avril", "Manifestation devant le bureau du Premier ministre Jean Charest à Sherbrooke", "18")
					),
					tableRow(
						array("13 avril", "Manifestation nocturne à Montréal", "1")
					),
					tableRow(
						array("14 avril", "Occupation du bureau de circonscription de la ministre de l’éducation à Montréal", "1")
					),
					tableRow(
						array("14 avril", "Manifestation du printemps érable à Montréal", "1")
					),
					tableRow(
						array("17 avril", "Université du Québec en Outaouais", "2")
					),
					tableRow(
						array("17 avril", "Occupation de la Chambre de commerce à Sherbrooke", "1")
					),
					tableRow(
						array("17 avril", "Université du Québec à Montréal", "2")
					),
					tableRow(
						array("18 avril", "Bureau du ministère de l’éducation à Sherbrooke", "19")
					),
					tableRow(
						array("18 avril", "Université du Québec en Outaouais", "2")
					),
					tableRow(
						array("18 avril", "Manifestation près de l’Université du Québec en Outaouais", "161")
					),
					tableRow(
						array("19 avril", "Manifestation de perturbation à Montréal", "2")
					),
					tableRow(
						array("19 avril", "Cégep Limoilou à Québec", "49")
					),
					tableRow(
						array("19 avril", "Manifestation à Gatineau", "151")
					),
					tableRow(
						array("20 avril", "Manifestation contre le Salon Plan Nord à Montréal", "20")
					),
					tableRow(
						array("21 avril", "Manifestation contre le Salon Plan Nord à Montréal", "90")
					),
					tableRow(
						array("22 avril", "Action au siège social de SNC-Lavalin à Montréal", "2")
					),
					tableRow(
						array("24 avril", "Manifestation nocturne à Montréal", "3")
					),
					tableRow(
						array("25 avril", "Ostie de grosse manif organisée par l’AFESPED à Montréal", "85")
					),
					tableRow(
						array("26 avril", "Manifestation à Montréal", "4")
					),
					tableRow(
						array("27 avril ", "Manifestation féministe à Québec", "81")
					),
					tableRow(
						array("27 avril ", "Manifestation C’est pas une offre, c’est une insulte à Montréal", "35")
					),
					tableRow(
						array("28 avril", "Manifestation nocturne à Montréal", "35")
					),
					tableRow(
						array("29 avril", "Manifestation nocturne à Montréal", "1")
					),
					tableRow(
						array("30 avril", "Vidéo humoristique à Montréal", "1")
					),
					tableRow(
						array("30 avril", "Piquetage à Sherbrooke", "2")
					),
					tableRow(
						array("30 avril", "Manifestation nocturne à Montréal", "1")
					),
					tableRow(
						array("1e mai", "Alma", "2")
					),
					tableRow(
						array("1e mai", "Manifestation de la CLAC à Montréal", "109")
					),
					tableRow(
						array("4 mai", "Congrès du PLQ à Victoriaville : occupants d’autobus arrêtés et détenus", "69")
					),
					tableRow(
						array("4 mai", "Congrès du PLQ à Victoriaville : occupants d’autobus arrêtés, détenus et accusés", "40")
					),
					tableRow(
						array("5 mai", "Congrès du parti libéral à Victoriaville", "5")
					),
					tableRow(
						array("5 mai", "Manifestation nocturne à Montréal", "3")
					),
					tableRow(
						array("10 mai", "Engins fumigènes dans le métro à Montréal", "4")
					),
					tableRow(
						array("14 mai", "Manifestation nocturne à Montréal", "2")
					),
					tableRow(
						array("14 mai", "Blocage à Montréal", "5")
					),
					tableRow(
						array("15 mai", "Victoriaville", "1")
					),
					tableRow(
						array("16 mai", "Manifestation contre la Loi spéciale à Montréal", "123")
					),
					tableRow(
						array("18 mai", "Manifestation contre le vote de la Loi spéciale à Montréal", "4")
					),
					tableRow(
						array("18 mai", "Manifestation en soirée à Sherbrooke", "14")
					),
					tableRow(
						array("19 mai", "Manifestation de blocage du Pont Jacques-Cartier à Montréal", "21")
					),
					tableRow(
						array("19 mai", "Manifestation de nuit à Montréal", "71")
					),
					tableRow(
						array("19 mai", "Cégep Lionel-Groulx à Montréal", "5")
					),
					tableRow(
						array("19 mai", "Victoriaville", "1")
					),
					tableRow(
						array("20 mai", "Manifestation nocturne à Montréal", "308")
					),
					tableRow(
						array("20 mai", "Manifestation nocturne à Québec", "37")
					),
					tableRow(
						array("21 mai", "Plan nord à Montréal", "1")
					),
					tableRow(
						array("21 mai", "Manifestation féministe étudiante à Montréal", "3")
					),
					tableRow(
						array("21 mai", "Manifestation nocturne à Montréal", "2")
					),
					tableRow(
						array("21 mai", "Manifestation à Sherbrooke", "36")
					),
					tableRow(
						array("22 mai", "Manifestation nocturne à Montréal", "113")
					),
					tableRow(
						array("23 mai", "Manifestation nocturne à Montréal", "518")
					),
					tableRow(
						array("23 mai", "Manifestation nocturne à Québec", "176")
					),
					tableRow(
						array("24 mai", "Manifestation nocturne à Montréal", "4")
					),
					tableRow(
						array("24 mai", "Manifestation nocturne à Québec", "3")
					),
					tableRow(
						array("25 mai", "Manifestation nocturne à Montréal", "3")
					),
					tableRow(
						array("25 mai", "Gatineau", "4")
					),
					tableRow(
						array("27 mai", "Manifestation nocturne à Montréal", "2")
					),
					tableRow(
						array("28 mai", "Manifestation nocturne à Québec", "84")
					),
					tableRow(
						array("31 mai", "Manifestation nocturne à Montréal", "3")
					),
					tableRow(
						array("31 mai", "Manifestation nocturne à Québec", "1")
					),
					tableRow(
						array("1er juin", "Manifestation à l’Université de Montréal", "1")
					),
					tableRow(
						array("1er juin", "Manifestation nocturne à Montréal", "3")
					),
					tableRow(
						array("5 juin", "Manifestation à Montréal", "1")
					),
					tableRow(
						array("6 juin", "Manifestation nocturne à Montréal", "65")
					),
					tableRow(
						array("6 juin", "Manif-action à Montréal", "1")
					),
					tableRow(
						array("7 juin", "Suites d’enquêtes à Montréal", "8")
					),
					tableRow(
						array("7 juin", "Gatineau", "3")
					),
					tableRow(
						array("7 juin", "Manifestation contre la cérémonie d’ouverture du Grand Prix F1 à Montréal", "37")
					),
					tableRow(
						array("8 juin", "Manifestation à Montréal", "39")
					),
					tableRow(
						array("9 juin", "Manifestation contre le Grand Prix F1 à Montréal", "12")
					),
					tableRow(
						array("9 juin", "Manifestation de nuit à Montréal", "2")
					),
					tableRow(
						array("10 juin", "Arrestations préventives sans accusation à Montréal", "34")
					),
					tableRow(
						array("10 juin", "Stations de métro à Montréal", "3")
					),
					tableRow(
						array("10 juin", "Manifestation sur Crescent à Montréal", "2")
					),
					tableRow(
						array("10 juin", "Manifestation nocturne à Montréal", "28")
					),
					tableRow(
						array("11 juin", "Enquête à Montréal", "1")
					),
					tableRow(
						array("12 juin", "Manifestation à Montréal", "1")
					),
					tableRow(
						array("13 juin", "Manifestation nocturne à Montréal", "2")
					),
					tableRow(
						array("14 juin", "Manifestation à Montréal", "2")
					),
					tableRow(
						array("16 juin", "Manifestation nocturne à Montréal", "8")
					),
					tableRow(
						array("17 juin", "Manifestation nocturne à Montréal", "8")
					),
					tableRow(
						array("18 juin", "Manifestation nocturne à Montréal", "1")
					),
					tableRow(
						array("19 juin", "Enquête à Montréal", "6")
					),
					tableRow(
						array("19 juin", "Bousculade à l’Hôtel de Ville de Québec", "1")
					),
					tableRow(
						array("19 juin", "Manifestation à l’Hôtel de Ville de Québec", "21")
					),
					tableRow(
						array("20 juin", "Manifestation nocturne à Montréal", "2")
					),
					tableRow(
						array("22 juin", "Manifestation nationale", "1")
					),
					tableRow(
						array("22 juin", "Enquête à Québec", "4")
					),
					tableRow(
						array("24 juin", "Manifestation nocturne à Montréal", "2")
					),
					tableRow(
						array("26 juin", "Manifestation nocturne à Montréal", "1")
					),
					tableRow(
						array("2 juillet", "Manifestation à Montréal", "1")
					),
					tableRow(
						array("10 juillet", "Manifestation nocturne à Montréal", "2")
					),
					tableRow(
						array("15 juillet", "Manifestation nocturne à Montréal", "1")
					),
					tableRow(
						array("22 juillet", "Manifestation nationale à Montréal", "1")
					),
					tableRow(
						array("23 juillet", "Manifestation nocturne à Montréal", "1")
					),
					tableRow(
						array("1er août", "Manifestation nocturne à Montréal", "17")
					),
					tableRow(
						array("2 août", "Manifestation à Montréal", "15")
					),
					tableRow(
						array("13 août", "Manifestation nocturne à Montréal", "2")
					),
					tableRow(
						array("14 août", "Manifestation nocturne à Montréal", "1")
					),
					tableRow(
						array("15 août", "Manifestation nocturne à Montréal", "1")
					),
					tableRow(
						array("17 août", "Manifestation nocturne à Montréal", "1")
					),
					tableRow(
						array("18 août", "Manifestation nocturne à Montréal", "6")
					),
					tableRow(
						array("20 août", "Manifestation à Montréal", "1")
					),
					tableRow(
						array("22 août", "Manifestation à Montréal", "1")
					),
					tableRow(
						array("23 août", "Manifestation nocturne à Montréal", "1")
					),
					tableRow(
						array("27 août", "Université de Montréal", "20")
					),
					tableRow(
						array("28 août", "Université de Montréal", "16")
					),
					tableRow(
						array("29 août", "Manifestation de perturbation à Montréal", "4")
					),
					tableRow(
						array("29 août", "Manifestation nocturne à Montréal", "6")
					),
					tableRow(
						array("31 août", "Manifestation nocturne à Montréal", "1")
					),
					tableRow(
						array("3 septembre", "Manifestation nocturne à Montréal", "2")
					),
					tableRow(
						array("Inconnue", "Manifestations nocturnes à Montréal", "3")
					)
				)
			)
		)
	)
);
$bilanArrestationsMasse = array(
	section(
		$toc,
		array(
			sectionTitle($toc,"Annexe 2 - Bilan des arrestations de masse"),
			paragraph("Total des arrestations de masse&nbsp;: 2913"),
			notes($notes),
			table(
				array(
					tableHeaderRow(
						array("Date (2012)", "Événements", "Arrestations")
					),
					tableRow(
						array("15 mars", "Manifestation contre la brutalité policière à Montréal", "226")
					),
					tableRow(
						array("20 mars", "Blocage du pont Champlain à Montréal", "80")
					),
					tableRow(
						array("27 mars", "Blocage de la route 410 à Sherbrooke", "60")
					),
					tableRow(
						array("18 mars", "Manifestation à Sherbrooke", "14")
					),
					tableRow(
						array("4 avril", "Action de perturbation à Montréal", "76")
					),
					tableRow(
						array("13 avril", "Manifestation à Sherbrooke", "18")
					),
					tableRow(
						array("18 avril", "Bureau du ministre de l’éducation à Sherbrooke", "19")
					),
					tableRow(
						array("18 avril", "Université du Québec en Outaouais", "161")
					),
					tableRow(
						array("19 avril", "Cégep Limoilou à Québec", "49")
					),
					tableRow(
						array("19 avril", "Université du Québec en Outaouais", "151")
					),
					tableRow(
						array("21 avril", "Encerclement lors d’une manifestation contre le Plan nord à Montréal", "89")
					),
					tableRow(
						array("25 avril", array("Manifestation ", em("Ostie de grosse manif de soir"), " à Montréal"), "85")
					),
					tableRow(
						array("27 avril", "Encerclement d’une manifestation féministe à Québec", "80")
					),
					tableRow(
						array("28 avril", "Manifestation nocturne à Montréal", "35")
					),
					tableRow(
						array("1er mai", "Manifestation à Montréal", "109")
					),
					tableRow(
						array("4 mai", "Autobus au retour de Victoriaville", "40")
					),
					tableRow(
						array("16 mai", "Manifestation contre la loi spéciale à Montréal", "122")
					),
					tableRow(
						array("19 mai", "Manifestation nocturne à Montréal", "60")
					),
					tableRow(
						array("19 mai", "Blocage du pont Jacques-Cartier à Montréal", "21")
					),
					tableRow(
						array("20 mai", "Manifestation nocturne à Montréal", "308")
					),
					tableRow(
						array("20 mai", "Manifestation nocturne à Montréal", "37")
					),
					tableRow(
						array("21 mai", "Manifestation nocturne à Sherbrooke", "36")
					),
					tableRow(
						array("22 mai", "Manifestation nocturne à Montréal", "113")
					),
					tableRow(
						array("23 mai", "Manifestation nocturne à Montréal", "518")
					),
					tableRow(
						array("23 mai", "Manifestation nocturne à Québec", "176")
					),
					tableRow(
						array("28 mai", "Manifestation nocturne à Montréal", "84")
					),
					tableRow(
						array("6 juin", "Manifestation nocturne à Québec", "65")
					),
					tableRow(
						array("10 juin", "Manifestation nocturne à Montréal", "28")
					),
					tableRow(
						array("19 juin", "Manifestation à Québec", "21")
					),
					tableRow(
						array("1er août", "Manifestation nocturne à Montréal", "17")
					),
					tableRow(
						array("2 août", "Manifestation nocturne à Montréal", "15")
					)
				)
			),
			image(
				"images/fromPDF/mur.jpeg",
				"Mur de policier",
				null,
				"Photo © Mario Jean / MADOC 2012"
			),
			notes($notes)
		)
	)
);
$quatriemeCouverture = array(
	section(
		$toc,
		array(
			image(
				"images/fromPDF/quatriemeCouverture.jpeg",
				"Policiers vus de dos",
				null,
				"Photo de couverture © Mario Jean / MADOC 2012"
			)
		),
		null,
		false
	)
);
$credits = array(
	logoList(
		array(
			listItem(
				linkAnchor(
					"http://www.liguedesdroits.ca",
					image(
						"images/fromPDF/liguedesdroits.jpeg",
						"Logo de la Ligue des Droits et Libertés"
					)
				)
			),
			listItem(
				linkAnchor(
					"http://asse-solidarite.qc.ca",
					image(
						"images/fromPDF/asse.jpeg",
						"Logo de l'Association pour un Solidarité Syndicale Étudiantes"
					)
				)
			),
			listItem(
				linkAnchor(
					"http://www.ajpquebec.org",
					image(
						"images/fromPDF/ajpquebec.jpeg",
						"Logo de l'Association des Jusristes Progressistes"
					)
				)
			)
		)
	)
);

?>
