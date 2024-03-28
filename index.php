<?php

ini_set('memory_limit', '2G');

$csvData = "English:English,0.0115842,0.0134947,0.0163842,0.0136263,0.0127474,0.0060053,0.0021211,0.0024895,0.0025737,0.0031158,-0.0029368,0.0037474,-0.0084684,-0.0075211,0.0151895,0.0026789,-0.0079526,0.0032316,0.0029316,0.0023684,0.0047579,0.0027526,-0.0026526,0.0114474,2.63e-05
Irish_Scottish_Welsh:Irish,0.0117165,0.0132047,0.01622,0.0151282,0.0122788,0.0069388,0.0014012,0.0020424,0.0017447,0.0016059,-0.0042929,0.0038965,-0.0095447,-0.0102282,0.0191094,0.0039329,-0.0085482,0.0014953,0.0004753,0.00142,0.0040988,0.0010341,0.0002376,0.0119565,0.0005518
Irish_Scottish_Welsh:Orcadian,0.01148,0.01322,0.0167,0.015,0.01258,0.00629,0.00076,0.0017,0.00246,0.00098,-0.00421,0.00321,-0.00801,-0.00787,0.01647,0.00229,-0.0095,0.00274,0.00213,0.00024,0.00397,0.00182,-0.00175,0.00833,-5e-04
North_West_European:Dutch,0.0111359,0.0129297,0.0162,0.0142875,0.01315,0.0059609,0.0027844,0.0035016,0.0017484,0.0001797,-0.0039688,0.0030609,-0.0058578,-0.006425,0.0128531,0.0040312,-0.0063,0.001,0.0033969,0.00225,0.0037594,0.0023188,0.0002172,0.0127422,-0.0004109
North_West_European:Austrian,0.0113412,0.0132941,0.0144235,0.0101353,0.0113,0.0045059,0.0030765,0.0027059,0.0013824,0.0015118,-0.0023882,0.0005235,-0.0008706,0.0020235,0.0003706,0.0027882,0.0001706,0.0006235,0.0025294,0.0006706,-0.0007941,-0.0021471,0.0013529,0.0024588,-0.0008588
North_West_European:German,0.0114443,0.0135278,0.0153747,0.0119835,0.0129987,0.0056101,0.0017304,0.0025076,0.0017241,0.0010316,-0.0027177,0.0015835,-0.0036127,-0.0018468,0.0062722,0.0024823,-0.0025101,0.0013127,0.0026785,0.0013747,0.0025165,0.0016215,5.82e-05,0.0068924,0.0002316
North_West_European:French,0.0111727,0.0139273,0.0133727,0.0074273,0.0132909,0.0033364,0.0011909,0.0023636,0.0056727,0.0099727,-0.0047455,0.0045455,-0.0086818,-0.0075455,0.0101455,0.0045727,-0.0014,0.0036818,0.0021545,-0.0007818,0.0017636,0.0028909,-0.001,0.0092455,-0.0015909
Finnish:Finnish,0.0114733,0.0090467,0.02384,0.02372,0.0103067,0.00834,0.0037133,0.0057133,0.0015533,-0.01266,0.0022667,-0.0040267,0.00802,0.00422,0.0015533,-0.0009667,-0.00624,0.00052,0.0010267,0.0022067,0.0056467,0.0009467,0.0022667,0.0047267,0.00176
Finnish:Ingrian,0.0114,0.0088667,0.0238333,0.0234333,0.0107333,0.0092667,0.0042333,0.0056333,-3e-04,-0.0145667,0.0019667,-0.0066,0.0098333,0.0041333,-0.0021667,0.0020333,-0.0012333,-0.0004667,-0.0034667,0.0039667,0.0032333,0.0001333,0.0060667,0.0016667,0.0025333
Scandinavian:Swedish,0.0117667,0.0126333,0.0191095,0.0174333,0.0132905,0.0076857,0.0030048,0.0040286,0.0024,-0.003619,-0.0029571,0.0010095,-0.0031286,-0.0027857,0.0110524,0.0030286,-0.0055476,0.001581,0.0027714,0.0039,0.0056714,0.0018429,0.0009143,0.0088476,-0.0008143
Scandinavian:Danish,0.0114659,0.0133364,0.0175364,0.0160364,0.013425,0.0069114,0.0023977,0.0034182,0.001475,-0.0019159,-0.0033568,0.0026114,-0.0057545,-0.0043659,0.0140818,0.0039318,-0.0055295,0.0016295,0.0023318,0.0031091,0.0043023,0.0014682,0.0004727,0.0116023,4e-04
Scandinavian:Norwegian,0.0117571,0.0126,0.0180143,0.0165429,0.0125571,0.0075429,0.0017857,0.0027286,0.0028,0.0002143,-0.0023,0.0024571,-0.0050571,-0.0085,0.0155286,0.0070857,-0.0041571,0.0020571,0.0005429,6e-04,0.0045143,0.0045,0.0034714,0.0147143,0.0009143
East_European:Russian,0.0119,0.012025,0.01845,0.01755,0.011975,0.0071,0.0051,0.006125,-0.00215,-0.0119,-0.00125,-0.006875,0.01325,0.015475,-0.0096,-0.002175,0.004275,0.00085,0.002875,0.001925,-0.003025,-0.004775,0.0044,-0.0058,0.000825
East_European:Polish,0.0115829,0.0127293,0.0185268,0.0178756,0.0132171,0.0077854,0.0036927,0.0047073,-0.0004561,-0.0101805,-0.002678,-0.0042829,0.0088073,0.0135366,-0.0051756,-0.000422,0.0011854,-5.85e-05,0.0021439,0.0010293,-0.0025073,-0.002522,0.0045488,-0.0027659,-7.32e-05
East_European:Hungarian,0.0111643,0.0127643,0.0146786,0.0112786,0.0118214,0.0042786,0.0028143,0.0032643,0.0010071,-0.0025643,-0.0009071,-0.0018143,0.0025929,0.0063571,-0.0032214,9.29e-05,-6.43e-05,-0.0003071,0.0021071,-0.0010571,-0.0027071,0.0011214,0.0044857,0.0022357,4e-04
East_European:Ukrainian,0.0115027,0.0122189,0.0181243,0.0178189,0.0122459,0.0076351,0.0037297,0.0049,-0.0014135,-0.0115784,-0.0010054,-0.0051108,0.0103297,0.0157189,-0.0082784,-0.000827,0.0035973,-0.0005514,0.0020676,0.0013595,-0.0036054,-0.0028135,0.0054676,-0.0033676,0.0006027
East_European:Czech,0.0115231,0.0129846,0.0160385,0.0146308,0.0125615,0.0067846,0.0027,0.0037538,0.0022846,-0.0048769,-0.0010385,-0.0026,0.0040692,0.0085538,0.0012846,0.0007538,-0.0004923,-0.0001154,0.0028385,0.0023154,-0.0010154,-0.0001308,0.0052846,0.0032615,0.0013308
Baltic:Lithuanian,0.01181,0.01238,0.02187,0.02325,0.01408,0.01,0.00425,0.00645,-0.001,-0.01639,-0.00182,-0.00923,0.01348,0.02035,-0.00815,0.00222,0.00471,-0.00045,0.00184,0.00489,-0.00299,-0.00389,0.00587,-0.00654,-0.00072
Baltic:Estonian,0.01168,0.01124,0.02327,0.02579,0.0139,0.01067,0.00484,0.00626,2e-04,-0.01561,4e-05,-0.00824,0.01309,0.01552,-0.00491,0.00129,0.00017,-0.00196,0.00107,0.00177,0.00111,-0.00151,0.00346,0.00062,0.00255
Greek_SouthItalian:Albanian,0.0103833,0.0139583,0.004125,-0.0049167,0.008175,-0.0026583,0.0014333,0.0007833,0.000325,0.00885,0.0006833,0.0010333,-0.004775,0.0048,-0.0142167,-0.0031333,0.0062333,0.0011833,0.0066,-0.00475,-0.0044583,0.0005833,0.0019667,0.001825,-0.0021083
Greek_SouthItalian:Greek,0.0103136,0.0142364,0.0019091,-0.00865,0.0063364,-0.0036727,0.0014591,3.64e-05,0.0009727,0.0077182,0.0024955,0.0005818,-0.0011227,0.0036091,-0.01165,0.0001636,0.0051273,0.0008045,0.0050818,-0.0035227,-0.0053636,0.0008091,0.0030955,0.0008409,-0.0015455
Greek_SouthItalian:Italian_Southern,0.0090333,0.0144,-0.0031667,-0.0144333,0.0040667,-0.0042,-0.0010333,-0.0013667,0.0022,0.0118,0.0002667,0.0018667,-0.0037,-7e-04,-0.0071,-0.0039667,0.0052333,0.0007667,0.0041,-0.0024333,-0.0021,-0.0019333,-0.0001333,0.0031333,1e-04
Balkan:Romanian,0.01094,0.0132,0.00906,0.00272,0.00937,0.0011,0.00155,0.00256,0.00061,0.00338,-0.00212,-0.00014,-0.00036,0.00585,-0.00933,-0.00039,0.00454,-0.00117,0.00268,-0.00246,-0.00536,-0.00204,0.00303,0.00101,-0.00106
Balkan:Bulgarian,0.01096,0.01328,0.0068,0.00166,0.008,-3e-04,0.00234,0.00132,-0.00014,0.00384,-0.00206,6e-04,0.00142,0.00628,-0.01054,-0.00168,0.00544,0.00158,0.0025,-0.00296,-0.0037,-0.00044,0.00228,-0.00206,-9e-04
Balkan:Serbian,0.011187,0.013513,0.010613,0.0045913,0.0102348,0.0016478,0.0020739,0.0028913,-0.0005739,-4.3e-06,-0.001413,-0.0008348,0.0022957,0.0090348,-0.0094957,-0.0006304,0.0031043,0.0004652,0.0034217,-0.0019565,-0.0066652,-0.001387,0.0039696,0.0003087,-0.0016783
Balkan:Croatian,0.01125,0.01318,0.01376,0.00975,0.01164,0.00449,0.00256,0.00292,9e-04,-0.00323,-0.00071,-0.00159,0.00318,0.00929,-0.00489,-0.00166,0.00211,-0.00057,0.00144,-6e-04,-0.00414,-0.00196,0.00359,-0.00091,0.00015
Balkan:Slovenian,0.01132,0.01332,0.0149,0.01048,0.01136,0.00454,0.00278,0.00302,0.00152,-0.00246,-0.00196,-0.0015,0.0015,0.01104,-0.00636,-0.00166,0.00016,0.00108,0.00622,-0.00092,-0.00322,-0.00226,0.00114,-0.00164,0.00182
Iberian:Portuguese,0.009328,0.01424,0.009548,-0.001372,0.013692,-0.001452,-0.001592,0.001196,0.012516,0.01632,-0.000452,0.004952,-0.008568,-0.008184,0.009252,-3e-04,-0.000868,-7e-04,-0.004584,-0.000196,0.000912,-0.00208,0.001056,-0.00094,-8.8e-05
Iberian:Spanish,0.01015,0.014575,0.0107,-0.001,0.013675,-0.001725,-0.000725,0.00075,0.01205,0.018625,-0.0013,0.0058,-0.010275,-0.009,0.007575,-8e-04,-0.004625,-0.00015,-1e-04,-0.00055,0.004375,0.0012,-0.00085,-0.003225,-9e-04
Sardinian:Sardinian,0.0106909,0.0164727,0.0075545,-0.0156818,0.0195455,-0.0079364,-0.0016818,0.0010818,0.0203273,0.0424455,-3.64e-05,0.0111091,-0.0192818,-0.0094273,-0.01,-0.0022636,0.0087455,-0.0010636,0.0013364,-0.0103909,-0.0017,-0.0008909,-0.0081818,-0.0177455,0.0002818
Italian:Italian_Northern,0.0110375,0.0146,0.0080375,-0.0019062,0.0111375,-0.0001625,0.0008688,0.0008688,0.0049062,0.0126438,-0.001375,0.0036625,-0.0070875,-0.002775,-0.0019875,0.0007188,0.0026688,0.0015438,0.0022688,-0.0033812,-8e-04,0.0023125,-0.0001062,0.0010937,-0.0017938
Italian:Italian_Central,0.0102889,0.0145222,0.0020667,-0.0086667,0.0065111,-0.0032889,-0.0003667,-0.0010444,0.0025556,0.0142222,-0.0002333,0.0036,-0.0068333,-0.0038667,-0.0018333,0.0004333,0.0053333,0.0004667,0.0008444,-0.0018667,-0.0027333,0.0006111,0.0002556,0.0025222,-0.0009111
Ashkenazi_Jewish:Ashkenazi,0.0087958,0.013475,-0.0019458,-0.0133125,0.0031833,-0.005525,-0.000375,-0.0003875,0.0040083,0.0078333,0.0007167,-0.0003958,0.0019375,0.0001208,-0.0030542,-0.0012625,-0.0028875,2.5e-05,-0.0006417,-0.00325,-0.0021458,-0.0018375,0.0013708,0.0018,0.001275
Mizrahi_Jewish:Iraqi_Jew,0.0078333,0.0138333,-0.0176333,-0.02345,-0.0075,-0.0073333,-0.0003667,-0.0035333,-0.0054,-0.0007667,0.0023833,-0.0030333,0.0077167,0.00495,-0.0056333,0.0061,-0.0037833,-0.0004667,0.0025,-0.0091167,0.0003167,-0.0030167,-0.0027167,-0.0031833,0.0016667
Ethiopian_Jewish:Ethiopian_Jew,-0.0204333,0.0103167,-0.0088833,-0.0255167,0.0003667,-0.0143,-0.0056167,-0.0002333,0.05285,-0.0377833,-0.0014833,-0.0084667,0.0119667,-0.00025,0.0166,-0.00895,0.0073333,0.0010667,0.0040333,0.0018167,0.0052667,0.0089333,-0.0033667,0.0025667,-0.00115
Sephardic_Jewish:Moroccan_Jew,0.006875,0.014075,-0.004625,-0.019075,0.003525,-0.00685,-0.0045,-0.00075,0.00795,0.013,0.004875,-0.0019,0.0042,-0.003775,0.0037,0.002475,-0.001275,-0.003475,-0.010175,-0.00435,-0.001325,-0.0069,0.0077,-0.0013,9e-04
Yemenite_Jewish:Yemenite_Jew,0.0045143,0.0142571,-0.0167714,-0.0353143,-0.0038429,-0.0167429,-0.0057429,-0.0038429,0.0239429,-0.0034429,0.0069714,-0.0177571,0.0363143,0.0023571,0.0026,0.0129429,-0.0188286,0.0027429,0.0051,0.0199571,0.0103286,0.0129286,-0.0057571,0.0038571,-0.0057571
Central_Asian:Kazakh,0.00594,-0.0216,0.01192,-0.00211,-0.01173,-0.005,0.00448,0.00486,-0.00319,-0.00084,-0.01378,-0.00176,0.00074,-9e-04,0.00105,0.00113,0.00026,0.00033,0.00132,0.00473,-0.01114,-0.00481,-0.00682,0.00044,0.00095
Central_Asian:Uzbek,0.00657,-0.01071,-0.00114,0.00306,-0.01125,0.00291,0.00307,0.002,-0.00753,-0.00545,-0.01064,-0.00273,0.00205,-0.00437,0.00389,0.00223,-0.00229,-0.00042,0.00092,-0.00065,-0.00628,-0.00135,-0.00295,0.00036,0.00294
Central_Asian:Uygur,0.0061,-0.01568,-6e-05,0.00046,-0.00956,0.00272,0.002,0.00216,-0.00622,-0.00534,-0.01522,-0.00104,0.00088,-0.00426,0.00338,0.00592,0.00136,-3e-04,-0.00216,-0.00032,-0.00652,-9e-04,-6e-04,0.00122,0.00264
Central_Asian:Tubalar,0.00606,-0.02082,0.01853,0.00821,-0.01789,-0.00344,0.00218,0.00278,-0.00496,-0.00798,-0.00834,-0.00164,-0.00042,-0.01902,0.004,0.00114,-0.00671,-0.00177,0.0065,0.01088,-0.02691,0.00657,-0.00426,-0.00333,-0.00145
Central_Asian:Tajik,0.0087857,0.0044429,-0.0067714,0.0132714,-0.0142,0.0091571,0.0023,-0.0009143,-0.0148714,-0.0160857,-0.0052571,-0.0006143,-0.0011857,-0.0090857,0.0126143,0.0098857,-0.0033429,-0.0013571,0.0009857,-0.0073286,-0.0069143,-0.0016714,0.0014429,6e-04,5e-04
Central_Asian:Turkmen,0.0074148,-0.0042963,-0.0018852,-0.0017296,-0.0131815,-0.0011778,0.0029407,0.0016593,-0.0089778,-0.0060333,-0.0057222,-0.0010556,0.0007593,-0.0029852,0.0015148,0.0033963,-0.0012148,5.93e-05,-0.0006556,-0.0024,-0.0057704,-0.0015889,-0.0037074,-0.0010778,0.0025519
South_Asian:Bengali,0.0038286,-0.0109143,-0.0399429,0.0317286,-0.0189714,0.0220286,-0.0015714,0.0041857,0.0208571,0.0158714,-0.004,-0.0008714,-0.0004143,0.0021143,-0.0034714,-0.0062714,0.0030714,0.0013,-0.0012571,0.0029714,-0.0007286,0.0017429,0.0021714,0.0038286,7.14e-05
South_Asian:Gujarati,0.004515,-0.005685,-0.04138,0.03431,-0.026185,0.0223,-9.5e-05,0.00503,0.016135,0.010345,-0.004,5.5e-05,-0.001465,0.001265,-5e-04,0.000285,0.000675,-0.000135,-0.001135,-0.003145,0.001145,-0.00268,9e-04,0.000935,-0.002485
South_Asian:Brahmin,0.005575,-0.002015,-0.032185,0.028785,-0.02419,0.01944,0.000715,0.003235,0.0064,0.002035,-0.003525,0.00018,-0.00028,-0.00343,0.00343,0.00486,0,-0.00011,-0.00021,-0.005505,-0.00031,-0.00296,0.00162,0.000205,-7.5e-05
South_Asian:Sindhi,0.0061167,0.0004833,-0.03075,0.0212167,-0.0245333,0.0156333,0.00045,0.0021667,-0.0009167,-0.0025833,-0.0034833,-0.0009667,-0.00035,-0.00425,0.00755,0.0123667,-3.33e-05,0.0016667,0.0039333,-0.01145,0.0001333,-0.0050333,-6.67e-05,-0.0033333,0.0041167
South_Asian:Jarawa,-0.0018,-0.0235,-0.0347,0.0328,0.0102,-0.001,-0.0041,0.004,0.028,0.0108,0.0111,-0.0009,-0.0025,0.008,-0.0058,-0.0083,0.0057,-0.002,-0.0076,0.0211,-0.0023,0.0095,-0.0141,0.0013,0.0027
South_Asian:Punjabi_Jatt,0.00665,0.000825,-0.0259,0.0253,-0.022025,0.01805,8e-04,0.002725,-0.0012,-0.005275,-0.0032,-0.001275,-0.00135,-0.004525,0.00765,0.00905,-0.003075,0.001025,0.003225,-0.011025,-0.00235,-0.0077,4e-04,-0.001725,0.001675
Chinese_Vietnamese:Southern_Chinese,0.0016857,-0.0445571,-0.0055143,-0.0219714,0.0328286,0.0170857,0.0001143,-0.0037857,-0.0073857,-0.0036857,-0.0188571,-0.0024143,0.0038857,-0.0029571,-0.0030857,0.002,-0.0002571,0.0017714,-0.0005286,-0.0125286,0.011,0.007,0.0102429,0.0001714,-0.0022143
Chinese_Vietnamese:Northern_Chinese,0.0022625,-0.0432875,0.0031,-0.0186125,0.0153875,0.0063,0.002825,8e-04,-0.0049375,0.00285,-0.046025,-0.0056,0.0069125,-0.0057625,-0.004975,-0.00035,0.000825,-0.00035,-0.004225,-0.005575,0.0070125,0.0085625,0.0099875,0.002025,0.0011875
Chinese_Vietnamese:Vietnamese,0.0015625,-0.0428125,-0.0101875,-0.0179,0.0370875,0.0202125,-0.0005875,-0.004025,-0.0080875,-0.00535,0.0013625,-0.0008125,0.00145,-0.0046125,-0.0011375,-0.00015,0.0001625,0.00065,-0.0032875,-0.006625,0.007175,0.00525,0.0098125,7.5e-05,0.0028
Japanese_Korean:Japanese,0.0020167,-0.0438667,0.0034667,-0.0183,0.0117667,0.00335,0.0015,0.00025,-0.0031833,0.00585,-0.0456,-0.0049833,0.0077667,-0.0051333,-0.00815,-0.0033667,0.0002333,0.0028333,0.0013333,-0.0074,0.0216667,-0.0134167,0.0039833,0.0028,-0.03505
Nepalese:Nepalese,0.0018333,-0.0335,-0.0096333,-0.0030333,0.0014667,0.0090333,-0.0003333,0.0023333,0.0073333,0.0084667,-0.0386333,-0.0047,0.0096667,0.0012333,-0.0014333,-0.0054,0.0078333,-0.0020667,-0.0105,0.0057333,-0.0064333,0.0141333,0.0053,0.0045333,0.0296667
Polynesian:Maori,0.0041,-0.0114,-0.0028,0.0098,0.0294,-0.0054,-7e-04,-8e-04,-0.0079,-0.0075,0.0058,0.0024,-0.0019,-0.0055,0.0121,0.0039,-0.0047,0.0051,0.0033,-0.0031,0.0059,-0.0046,-0.0033,-0.0021,-0.0188
Polynesian:Hawaiian,-3e-04,-0.0408,-0.0143,-0.0141,0.0457,0.0106,-0.0022,-0.0048,-0.011,-0.0115,0.0248,0.0024,-0.0039,9e-04,0.0094,0.0103,2e-04,0.0087,0.0044,-0.0059,1e-04,-0.0215,-0.0032,-0.003,-0.049
Filipino_Indonesian_Malay:Vizayan,0.0012,-0.0399,-0.0164,-0.0104,0.041,0.0132,-0.0027,-0.0049,-0.0057,-0.0101,0.0299,0.0034,-0.0017,0.0012,0.0061,0.0012,-0.0063,0.0039,0.0047,-0.0084,-0.0031,-0.0223,-0.0047,-0.0014,-0.0417
Filipino_Indonesian_Malay:Luzon,9e-04,-0.0425,-0.0148,-0.0165,0.0446,0.0219,-0.0019,-0.004,-0.009,-0.0079,0.0265,0.0028,-0.0027,-0.0042,0.0091,0.0075,-0.0042,0.004,0.0061,-0.0069,0.0036,-0.0237,-4e-04,-0.0056,-0.043
Filipino_Indonesian_Malay:Indonesian,0.001019,-0.0397524,-0.0210333,-0.0106667,0.0460857,0.023681,-0.0019857,-0.0056714,-0.0053524,-0.0102381,0.0517571,0.005181,-0.0064524,0.0051524,0.0042476,0.001819,-0.0009048,-0.0014381,0.0002048,0.0093857,-0.0112286,0.0019,-0.0108667,0.0011857,0.0174476
Filipino_Indonesian_Malay:Malay,0.0011,-0.038,-0.01912,-0.00864,0.03972,0.01944,-0.00126,-0.00314,-0.00544,-0.0086,0.03586,0.00442,-0.00488,0.00168,0.00532,0.00096,-0.00402,-0.00012,0.00214,0.00178,-0.00774,-0.00404,-0.00744,-0.0022,0.00062
Filipino_Indonesian_Malay:Batak,-6e-04,-0.0351,-0.02585,0.005,0.03775,0.00015,-0.00105,-0.00615,-0.00255,-0.00405,0.03195,0.00565,-0.00415,0.00215,0.0041,0.00315,0.00345,0.00335,0.0058,-0.00195,-0.003,-0.0172,-0.01125,-0.00675,-0.04115
Thai_Cambodian:Cambodian,0.0014667,-0.0393333,-0.0164333,-0.0106333,0.0376667,0.0221667,1e-04,-0.0024,-0.0027667,-0.0063667,0.0242667,0.0012333,-0.0012,-0.002,-0.0011333,-0.003,-0.0017667,-0.0020333,-0.0037667,0.0044667,-0.0030333,0.0090667,-0.0005667,6.67e-05,0.0179667
Thai_Cambodian:Burmese,0.0017,-0.0373,-0.0120667,-0.0062,0.0163,0.0134667,-0.0002333,0.0003333,0.0023333,0.0052,-0.0138,-0.0013,0.0041,-0.0010333,-0.0058,-0.0016333,0.0058667,-0.0028667,-0.0048667,0.0067,-0.0008667,0.0183667,0.0036667,0.0034,0.0265
Thai_Cambodian:Thai,0.00173,-0.03685,-0.01673,-0.00873,0.0304,0.01967,-0.00138,-0.00265,-0.00238,-0.00326,0.01237,0.00134,-0.00358,0.00026,0.00044,-2e-05,-0.00043,-0.00168,-0.00294,-0.00173,0.00133,0.00615,0.0025,0.00158,0.011
Japanese_Korean:Korean,0.0019967,-0.04477,0.0048933,-0.01985,0.01278,0.0041767,0.00233,0.0014567,-0.0042733,0.00349,-0.0459233,-0.00597,0.0069567,-0.0037133,-0.0062667,-0.00193,0.0009867,0.0017433,-0.0004167,-0.0061967,0.01355,-0.0035533,0.0062433,0.0004467,-0.01453
Mesoamerican_Andean:Mayan,0.0049857,-0.0290429,0.0293714,0.0279429,-0.0340714,-0.0056286,-0.1173714,-0.1424143,-0.0068857,-0.0088,-0.0010571,-0.0006714,0.0007286,0.0145286,-0.0064714,0.0028286,0.0060714,-0.0007714,-0.0010714,-0.0015571,-0.0020857,0.0045429,0.0008143,2.86e-05,3e-04
Mesoamerican_Andean:Mixtec,0.00468,-0.02926,0.03008,0.02838,-0.0327,-0.0067,-0.11448,-0.13916,-0.00624,-0.008,-0.0033,-0.00378,-0.00014,0.01174,-0.00624,0.0013,0.0039,0.00142,0.00158,-8e-04,-0.00236,0.00528,-6e-04,-0.00206,-0.0011
Mesoamerican_Andean:Zapotec,0.00474,-0.02938,0.02984,0.02846,-0.03374,-0.00572,-0.11372,-0.14052,-0.00324,-0.00782,-0.00308,-0.00384,0.00202,0.01456,-0.0043,0.00012,0.00216,-0.00062,0.00208,0.001,-0.00198,0.00424,8e-05,0.00032,-0.00106
Mesoamerican_Andean:Quechua,0.00494,-0.02654,0.02946,0.02708,-0.03148,-0.00608,-0.11654,-0.14182,-0.00552,-0.0068,-0.00248,-0.00134,-0.00164,0.01594,-0.0027,0.0062,0.00594,-0.00144,-2e-05,0.00034,-0.00086,0.00746,0.00038,0.00292,-0.0018
Mesoamerican_Andean:Yukpa,0.0048,-0.0311,0.0295,0.0308,-0.0361,-0.0074,-0.1296,-0.1576,-0.0053,-0.0086,-0.0063,-0.0046,0.0025,0.0177,-0.008,0.0052,0.0094,0.0034,-6e-04,6e-04,4e-04,0.007,0.0011,3e-04,-0.0056
Native_American:Cree,0.00665,-0.0186,0.02565,0.01935,-0.02285,-0.0035,-0.06405,-0.07685,-0.00195,-0.0082,0.00065,-0.0013,0.00255,0.00155,-0.00565,0.0027,0.0059,0.0018,0.00285,0.00485,-0.00425,-0.00425,0.0056,0.00785,-0.00025
Native_American:Amerindian_North,0.00465,-0.0323,0.0297,0.023975,-0.0345,-0.0066,-0.0844,-0.10175,-0.001825,-0.01105,0.0051,-0.002275,0.0043,5e-05,-0.01115,-0.0034,-4e-04,0.002575,0.00915,0.005875,0.0031,-0.0087,0.0022,0.00515,0.00775
Native_American:Chipewyan,0.0048,-0.0317,0.0286,0.0213,-0.03345,-0.0059,-0.0774,-0.09295,-0.0055,-0.01395,0.0064,-0.00395,0.00525,-0.00065,-0.00915,-0.00135,-5e-04,0.00205,0.00795,0.00795,0.0034,-0.0076,0.00095,0.0041,0.0052
Indigenous_Amazonian:Karitiana,0.0051667,-0.0315167,0.0313833,0.03355,-0.0369333,-0.0048833,-0.1374667,-0.16575,-0.0075167,-0.0095167,0.0005833,-0.0018,-0.0011,0.01985,-0.0033667,0.0033333,0.00845,0.00205,8.33e-05,-0.0002833,-0.0044333,0.0088167,-0.0045,-0.0021,-0.0056667
Indigenous_Amazonian:Surui,0.00508,-0.03126,0.03106,0.03304,-0.03698,-0.00552,-0.13864,-0.16974,-0.00858,-0.0114,0.00128,-0.00312,0.00156,0.02606,-0.00994,0.00044,0.00836,-0.00098,2e-04,0.00102,-0.00284,0.01024,-0.0055,-0.00618,-0.00764
Mongolian:Mongolian,0.00454,-0.03228,0.01694,-0.00822,-0.01492,-0.01066,0.00606,0.0077,-0.00046,0.00492,-0.01978,-0.00208,-0.00022,-0.00054,0.0024,0.00052,-0.0026,8e-05,0.00336,0.00722,-0.01726,-0.00774,-0.0151,0.00022,0.00062
Mongolian:Oroqen,0.0027,-0.0430333,0.0188,-0.0128333,-0.0151,-0.0129333,0.0081333,0.0102,0.0036,0.0078,-0.0167,-0.0014333,-0.0011667,0.0001667,-0.0060333,-0.0094,-0.004,0.0045333,0.0084667,0.0075,0.0089667,-0.0113667,-0.0043,0.0011667,0.0046333
Inuit:Eskimo,0.0042,-0.0363,0.0313333,0.0125667,-0.0401,-0.0158,-0.0435,-0.0511333,0.0033333,-0.0059,0.0181333,-0.0030333,0.0048,-0.0138667,-0.0267667,-0.0140667,-0.0032333,0.0135,0.0293333,0.0158,0.0227,-0.0401667,0.0055667,0.0237667,0.0302
SierraLeonean:Mende,-0.0547,0.00635,0.0060625,0.005275,0.0009625,0.003325,-0.00975,0.01165,-0.018975,0.015325,0.0035375,-0.0033625,0.0119625,0.000375,0.00755,-0.0054875,0.007225,0.0052375,0.000825,-0.0003125,0.00245,0.0010625,-0.0027375,-0.0002125,-0.00015
Nigerian:Yoruba,-0.0553545,0.0061545,0.0058636,0.0051727,0.0001636,0.0044727,-0.0189,0.0207,-0.0239,0.0179818,0.0028455,0.0005273,0.0155091,0.0006909,0.0092273,-0.0072455,0.0054273,0.0003545,0.0047909,-0.0023909,0.0012455,0.0018727,-0.0014273,-0.0003909,-0.0003545
Nigerian:Igbo,-0.0554,0.0063,0.0057,0.0056,0.00045,0.00395,-0.0134,0.0176,-0.0221,0.01845,0.00255,-0.00095,0.012,0.0018,0.00375,-0.00375,0.00635,0.0033,0.00245,0.00125,-5e-05,3e-04,-0.0021,0.00095,-0.00205
West_African:Gambian,-0.0532833,0.0066167,0.0052333,0.00355,0.0006833,0.002,-0.01525,0.0168,-0.0155167,0.01325,0.0033333,-0.0024333,0.0109167,-0.0007167,0.0081167,-0.0115667,0.0074333,-0.0009333,-0.0016833,-0.0025833,-0.0013167,-0.0014667,0.0035667,-8.33e-05,0.00115
West_African:Mandenka,-0.0533722,0.0062889,0.0048444,0.0033111,-7.22e-05,0.0032444,-0.01615,0.0167111,-0.0150611,0.0141889,0.0031278,-0.0008167,0.0131167,-0.0007222,0.0121833,-0.0091444,0.0083722,-0.0002111,-0.0015444,-0.0017611,-0.0014389,-0.0045667,0.0004833,-0.0008333,0.00125
West_African:Lemande,-0.055,0.00625,0.00445,0.0056,-2e-04,0.0041,-0.011,0.01255,-0.0177,0.01195,0.0019,-0.0018,7e-04,0.001,-9e-04,-0.001,-0.00365,-0.00105,-0.00035,0.00045,9e-04,-8e-04,-0.00335,-0.00045,-3e-04
Central_African:Ngumba,-0.05535,0.0062,0.00535,0.0064,0.00035,0.0032,-0.0031,0.00585,-0.01455,0.00955,0.00255,-0.0066,-0.0019,2e-04,-0.0022,0.00285,0.00075,-0.0026,-0.00085,0.00545,0.0037,-0.0016,-0.0045,-9e-04,-3e-04
Central_African:Sudanese,-0.0507733,0.0053733,0.0008067,-0.00154,-0.0008533,-0.0006933,-0.0043333,0.00596,0.03588,-0.0493333,-0.0116067,0.01462,-0.0248733,-0.0002467,0.0056133,-0.01178,0.0138067,-0.0089733,0.0154533,-0.0147333,-0.00054,0.0037867,-0.0027067,-0.0028867,0.00304
Central_African:Kongo,-0.0552,0.0064,0.0054,0.0054,-2e-04,0.0058,-0.007,0.0087,-0.0165,0.0111,0.0053,-0.0021,-0.0013,0.0011,-0.005,0.0058,-0.0074,9e-04,0.001,0.0028,-0.002,-8e-04,9e-04,-9e-04,-0.0057
Somali:Somali,-0.02606,0.0092,-0.00712,-0.02159,0.00031,-0.01222,-0.00872,0.0025,0.05642,-0.04372,-0.00551,-0.00445,0.00351,-0.00121,0.01822,-0.01404,0.0114,-0.00156,0.00794,-0.00307,0.00048,0.004,-0.00222,-0.00103,-0.00233
Kenyan:Luhya,-0.0525286,0.0062714,0.0045571,0.0022,0,0.0021,-0.0061714,0.0081857,0.0022143,-0.0118429,-0.0031143,0.0106714,-0.0221143,0.0008714,-0.0224,0.0201571,-0.0138286,-0.0019286,-0.0079143,0.0037714,0.0013571,0.0001571,0.0027714,0.0033,0.0005571
Kenyan:Ogiek,-0.0381,0.0074,-0.0024,-0.0118,0.0016,-0.0066,0.00045,-0.00035,0.0449,-0.0425,-0.00665,0.00515,-0.01535,0.00125,0.00635,-0.01335,0.00735,0.00205,0.007,-0.01105,0.0049,0.0029,-0.0032,-0.00285,0.00095
Kenyan:Luo,-0.0528375,0.0062625,0.0044375,0.0019875,-0.000925,0.0025875,-0.0050375,0.0066625,0.004025,-0.0147625,-0.004775,0.00815,-0.020525,0.0006125,-0.0171,0.0108125,-0.012625,-0.002125,-0.0052625,0.00085,0.0012375,0.000475,0.002175,0.0014,-0.001575
Maasai:Masai,-0.038575,0.0075,-0.0030125,-0.0110875,-0.0015625,-0.0066875,-0.0028,0.0018125,0.0478875,-0.049375,-0.010375,0.0038875,-0.0172375,-0.0008625,0.00875,-0.0137,0.017575,-0.00445,0.014675,-0.015925,-0.0009375,-1e-04,-0.00435,-0.002775,0.0041625
Middle_Eastern:Saudi,0.0043444,0.0139,-0.0171333,-0.0359444,-0.0037667,-0.0172556,-0.0056889,-0.0035444,0.0252556,-0.0032333,0.0100333,-0.0212556,0.0426111,0.0015556,0.0023444,0.0205,-0.0169111,0.0033889,-0.0002556,0.0242,0.0104667,0.0136556,-0.0058444,0.0068667,-0.0081444
Middle_Eastern:Yemenite,0.00394,0.01416,-0.01624,-0.03624,-0.003,-0.01718,-0.0047,-0.00198,0.02622,-0.00416,0.00906,-0.0181,0.0346,0.00406,0.00036,0.0152,-0.0164,0.00356,0.00206,0.01464,0.00916,0.01062,-0.00546,0.00386,-0.00458
Middle_Eastern:Bedouin,0.0036833,0.0141722,-0.0158611,-0.0362167,-0.0030278,-0.0172333,-0.006,-0.0037889,0.0252,-0.0028556,0.0097722,-0.0204,0.0423444,0.0035278,0.0032389,0.0217611,-0.0153167,0.0028889,-0.0031944,0.0231889,0.0087889,0.0123167,-0.0031778,0.0058944,-0.0069389
Middle_Eastern:Jordanian,0.0043,0.01292,-0.01258,-0.02304,-0.0041,-0.00978,-0.0021,-0.0014,0.00728,0.00046,0.00398,-0.00582,0.01076,-0.00068,-0.00082,0.0074,8e-05,7e-04,-0.0016,0.00338,0.0013,0.00234,-0.00092,0.00208,-0.00204
Middle_Eastern:Lebanese,0.0066545,0.0132727,-0.0119455,-0.0208273,-0.0053545,-0.008,-0.0003364,-0.0025091,0.0002818,0.002,0.0028273,-0.0025545,0.0080818,0.0020364,-0.0063727,0.0029182,-0.0018091,0.0003273,0.0012909,0.0005636,-0.0013545,-0.0009273,-0.0025,0.0014636,-0.0005636
Middle_Eastern:Syrian,0.0056895,0.0124053,-0.0129474,-0.0188737,-0.0061789,-0.0070158,-0.0013632,-0.0010789,-0.0008158,-0.0010105,0.0014684,-0.0036158,0.0073526,0.0004211,-0.0020263,0.0038474,-0.0029263,-0.0005158,0.0016526,0.0002842,0.0012316,0.0001158,-0.0019421,-0.0006158,5.3e-06
North_African:Egyptian,-0.00136,0.0132067,-0.0113433,-0.0270033,-0.00143,-0.01196,-0.0058667,0.0002467,0.0183867,0.0006567,0.0042967,-0.0058567,0.0154267,0.0013267,-0.0003833,-4.67e-05,-0.0025333,-0.0020667,-0.0027733,0.0025933,-0.0004633,-0.00185,0.00068,0.0007167,-0.00034
North_African:Moroccan,-0.0075,0.0128222,-0.0034,-0.0219444,0.0068667,-0.0118111,-0.0118222,0.0042333,0.0270889,0.0133889,0.0058556,-0.0060222,0.0181556,-0.0105111,0.0120111,-0.0046667,-0.0021222,-0.0134444,-0.0305667,0.0075444,-0.0078889,-0.0238667,0.0169667,-0.0009333,0.0049444
North_African:Libyan,-0.0041895,0.0128947,-0.0058158,-0.0250632,0.0029158,-0.0123947,-0.0089158,0.0013105,0.0254579,0.0053895,0.0037789,-0.0082684,0.0196579,-0.0036316,0.0062789,-0.0003842,-0.0029053,-0.0075579,-0.0160053,0.0090105,-0.0022526,-0.0107263,0.0076263,0.0006632,-0.0002474
North_African:Algerian,-0.0059792,0.013075,-0.0019,-0.0209708,0.0068958,-0.0107833,-0.0094125,0.003225,0.0259292,0.0137708,0.0033917,-0.0041167,0.0140292,-0.0100708,0.0095958,-0.0076708,-0.002575,-0.0129458,-0.025175,0.005725,-0.007725,-0.0228792,0.0147583,-0.0002208,0.0010792
North_African:Berber_Tunisia,-0.0024556,0.0136944,-0.0021444,-0.0236778,0.0090111,-0.0126222,-0.0133556,0.0022889,0.0334556,0.01635,0.0024667,-0.0029278,0.0132056,-0.0117167,0.0103833,-0.01275,0.0001167,-0.0183833,-0.0371722,0.0062833,-0.0134889,-0.0326944,0.0228278,-0.0036944,0.0053167
West_Asian:Turkish,0.0085462,0.0082846,-0.0081077,-0.0125462,-0.0074231,-0.0047846,0.0014923,-0.0008462,-0.0103,-0.0011923,-0.0001846,0.0018615,-0.0024692,0.0006923,-0.0041692,-0.0011692,5e-04,0.0008769,0.0008462,-0.0014385,-0.0010769,0.0015231,-0.0014769,-0.0003846,0.0003692
West_Asian:Armenian,0.0090375,0.0135875,-0.0154125,-0.0188375,-0.009325,-0.0057,0.001975,-0.002475,-0.0148875,-0.0024125,8e-04,-0.00015,-0.0020375,0.0018,-0.0034,-0.0011,0.0003125,0.00065,0.00205,-0.0022375,0.000125,0.0020125,-0.001825,-0.0018125,-1.25e-05
West_Asian:Azeri,0.0081,0.0087789,-0.0130947,-0.0125737,-0.0117579,-0.0017,0.0018368,-0.0016632,-0.0138263,-0.0053579,-0.0011211,-0.0001579,0.0005158,-0.0010789,0.0011421,0.0032632,-0.0019895,0.0009632,0.0015684,-0.0039105,-0.0001895,-0.0008263,-0.0009842,-0.0018947,0.0007421
West_Asian:Georgian,0.00954,0.01348,-0.01438,-0.01748,-0.00996,-0.00306,0.0038,-0.00204,-0.02422,-0.00712,0.00178,0.00666,-0.0121,0.00298,-0.00298,-0.01264,0.00974,-0.00272,-0.00238,0.00836,0.0051,0.00164,-0.00112,-0.0072,-0.00092
West_Asian:Iranian,0.0077765,0.0094176,-0.0169353,-0.0074588,-0.0149765,0.0002706,0.0018765,-0.0022588,-0.0139765,-0.0081353,0.0004824,-0.0007059,0.0031882,-0.0018529,0.0033529,0.0089,-0.0041529,0.0012,0.0015647,-0.0071471,-0.0003235,-0.0027176,0.0010471,-0.0036824,0.0033941
West_Asian:Kurdish,0.0084455,0.0113091,-0.0163636,-0.0115818,-0.0136636,-0.0025727,0.0028545,-0.0011818,-0.0148727,-0.0074545,0.0001818,-0.0003091,0.0013,-0.0012636,0.0025091,0.0104273,0.0013818,0.0014455,9.09e-05,-0.0073818,0.0004545,-0.0042364,0.0001818,-0.0022727,0.0023273
West_Asian:Assyrian,0.0086,0.013,-0.0164909,-0.0192909,-0.0103909,-0.0062182,0.0024727,-0.0024818,-0.0119818,-0.0020818,0.0026091,-0.0009818,0.0031727,-0.0002182,-0.0020273,0.0061,-0.0004636,9e-04,0.0009364,-0.004,-0.0022273,0.0018727,-9.09e-05,-0.0021182,0.0023818
West_Asian:Iraqi,0.0041556,0.0118,-0.0162111,-0.0174444,-0.0097444,-0.0054,-0.0014778,-0.0012889,-0.0012667,-0.0027,0.0039333,-0.0040667,0.0111,0.0007444,0.0007444,0.0071778,-0.0075333,0.0017889,0.0035556,-8.89e-05,0.0008556,0.0004556,-0.0016556,0.0004333,0.0013667
West_Asian:Avar,0.0100455,0.0102818,-0.0061636,0.0037727,-0.0134909,0.0043909,0.0039091,-0.0016455,-0.0281273,-0.0222455,0.0005727,0.0035,-0.0071545,-0.0052364,0.0111727,-0.0017818,-0.0007818,-0.0010273,-0.0054818,0.0030818,-0.0003091,0.0009818,0.0035091,0.0081818,-0.0016818
Papuan:Papuan,-0.00404,-0.02374,-0.06994,0.09574,0.06724,-0.18272,-0.00084,0.00304,-0.02018,-0.00656,-0.01164,0.00058,0.00094,-0.00226,0.00012,-0.00024,-0.00168,-0.00146,-0.00086,-0.00122,0.00188,0.00146,0.001,0.00152,0.00134
Melanesian:Kosipe,-0.0038,-0.0239,-0.0678,0.0922,0.0669,-0.1762,0.0011,0.0021,-0.0188,-0.0068,-0.0088,0.002,0.0015,-0.004,-7e-04,0.0023,-0.0022,0.0013,9e-04,-0.002,0.0022,0.001,0.0014,-0.0038,0.0041";

$lines = explode("\n", $csvData);
$referencePopulations = [];

foreach ($lines as $line) {
    $parts = explode(',', $line);
    $populationName = array_shift($parts);
    $referencePopulations[$populationName] = array_map('floatval', $parts);
}

// Sample G25 coordinates
$sampleUnscaled = []; // <--- your UNSCALED coord here

// Function to calculate Euclidean distance between two sets of coordinates
function calculateEuclideanDistance(array $coords1, array $coords2) {
    $sum = 0;
    for ($i = 0; $i < count($coords1); $i++) {
        $sum += pow(($coords1[$i] - $coords2[$i]), 2);
    }
    return sqrt($sum);
}

// Known populations (e.g., Zhuang)
$knownPopulations = ['North_African:Egyptian', 'East_European:Polish'];  // Assume two known populations for simplicity

// Calculate distances for each reference population
$distances = [];
foreach ($referencePopulations as $population => $coords) {
    $distances[$population] = calculateEuclideanDistance($sampleUnscaled, $coords);
}

// Sort and get the closest populations
asort($distances);
$closestPopulations = array_slice($distances, 0, 20, true); // Adjust the pool size as needed

// Ensure the known populations are included
foreach ($knownPopulations as $knownPopulation) {
    if (!array_key_exists($knownPopulation, $closestPopulations)) {
        $closestPopulations[$knownPopulation] = $distances[$knownPopulation];
    }
}

$populationKeys = array_keys($closestPopulations);
$results = [];

// Generate unique combinations with the known populations
foreach ($populationKeys as $pop1) {
    if (in_array($pop1, $knownPopulations)) continue;
    foreach ($populationKeys as $pop2) {
        if (in_array($pop2, $knownPopulations) || $pop2 === $pop1) continue;

        // Iterate through percentages for the known populations
        for ($percentage1 = 5; $percentage1 <= 100; $percentage1++) {
            for ($percentage2 = 5; $percentage2 <= (100 - $percentage1); $percentage2++) {
                $averageCoords = array_fill(0, count($sampleUnscaled), 0);
                $knownPercentage1 = $percentage1 / 100.0;
                $knownPercentage2 = $percentage2 / 100.0;
                $otherPercentage = (1 - $knownPercentage1 - $knownPercentage2) / 2;

                $combination = [
                    $knownPopulations[0] => $knownPercentage1,
                    $knownPopulations[1] => $knownPercentage2,
                    $pop1 => $otherPercentage,
                    $pop2 => $otherPercentage
                ];

                foreach ($combination as $population => $percent) {
                    for ($i = 0; $i < count($sampleUnscaled); $i++) {
                        $averageCoords[$i] += $referencePopulations[$population][$i] * $percent;
                    }
                }

                $distance = calculateEuclideanDistance($sampleUnscaled, $averageCoords);
                if ($distance < 0.021) {
                    $results[] = [
                        'combination' => $combination,
                        'distance' => $distance
                    ];
                }
            }
        }
    }
}

// Sort results by distance
usort($results, function ($a, $b) {
    return $a['distance'] <=> $b['distance'];
});

// Output the sorted combinations with percentages
echo "Combinations of ancestries, sorted by distance:<br><br>";
foreach (array_slice($results, 0, 10) as $result) {
    foreach ($result['combination'] as $population => $percentage) {
        echo "$population: " . round($percentage * 100, 2) . "%, ";
    }
    echo "<br>Distance: " . $result['distance'] . "<br><br>";
}
