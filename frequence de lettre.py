# Caractères que l'on souhaite ignorer lors de l'analyse
carNonTraite = [' ',',',':',';','.',"'",'-','!','?',"«", "»","(", ")", '"', "1", "2", "3", "9", "0", "7","œ"]

def freq(texte):
    d = {} # On initialise un dictionnaire
    compteur = 0
    for c in texte:
        c = c.lower();
        if c not in carNonTraite:
            if c in ['ï','î']:
                c = 'i'
            if c in ('à','â'):
                c = 'a'
            if c in ['é','è','ê','ë']:
                c = 'e'
            if c == 'ô':
                c = 'o'
            if c in ('ù', 'û', 'ü'):
                c = 'u'
            if c in ('ç'):
                c = 'c'
            if c not in d:
                d[c] = 1
            else:
                d[c] += 1
            compteur += 1
    return d, compteur

texte = ""

with open('albatros.txt' , encoding='utf8') as poeme:
    for ligne in poeme:
        # On récupère ligne à ligne en supprimant les saut de ligne
        texte += ligne.replace('\n','')
# On construit une liste avec les éléments du dictionnaire
d, compteur = freq(texte)
L = sorted(d.items(), key = lambda colonne: colonne[1] , reverse = True)
for i in L:
    pourcentage = i[1]/compteur*100
    print(f"{i[0]} {pourcentage:.2f} %")