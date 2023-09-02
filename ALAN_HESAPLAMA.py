def matematik():
    print("-" * 30)
    print("1-ALAN HESABI\n2-CEVRE HESABI")
    print("-" * 30)
    sec = int(input("=>"))
    
    if sec == 1:
         
        def alan_hesaplama():
            print("-" * 30)
            print("   ALAN HESAPLAMA   ")
            print("-" * 30)
            print("\n1-KARE\n2-DIKDORTGEN\n3-UCGEN\n4-DAIRE\n5-CIKIS!!!")
            while True:
                secim = int(input("** SECIMINIZ **\n=>"))
                if secim == 1:
                    a = int(input("Kenar Uzunlugu Giriniz: "))
                    kare = a * a
                    print("KARE ALAN => ", kare)

                if secim == 2:
                    a = int(input("Uzun Kenari Giriniz: "))
                    b = int(input("Kisa Kenari Giriniz: "))
                    dikdortgen = a * b
                    print("DIKDORTGEN ALAN => ", dikdortgen)

                if secim == 3:
                    a = int(input("Taban Uzunlugu Giriniz: "))
                    b = int(input("Yukseklik Uzunlugu Giriniz: "))
                    ucgen = (a * b) / 2
                    print("UCGEN ALAN => ",ucgen)

                if secim == 4:
                    a = int(input("Yaricapi Giriniz: "))
                    daire = 3.1415 * a * a
                    print("DAIRE ALAN => ",daire)   

                if secim == 5:
                        break
        alan_hesaplama()
    if sec == 2:
        def cevre_hesaplama():
                print("-" * 30)
                print("  CEVRE HESAPLAMA  ")
                print("-" * 30)
                print("\n1-KARE\n2-DIKDORTGEN\n3-UCGEN\n4-DAIRE\n5-CIKIS!!!")
                while True:
                    secim = int(input("** SECIMINIZ **\n=>"))
                    if secim == 1:
                        a = int(input("Kenar Uzunlugu Giriniz: "))
                        kare = a * 4
                        print("KARE CEVRE => ", kare)

                    if secim == 2:
                        a = int(input("Uzun Kenari Giriniz: "))
                        b = int(input("Kisa Kenari Giriniz: "))
                        dikdortgen = 2 * (a + b)
                        print("DIKDORTGEN CEVRE => ", dikdortgen)

                    if secim == 3:
                        a = int(input("Birinci Kenari Giriniz: "))
                        b = int(input("Ikinci Kenari Giriniz: "))
                        c = int(input("Ucuncu Kenari Giriniz: "))
                        ucgen = a + b + c
                        print("UCGEN CEVRE => ", ucgen)
                    
                    if secim == 4:
                        a = int(input("Yaricapi Giriniz: "))
                        daire = 2 * a * 3.1415
                        print("DAIRE CEVRE => ", daire)
                    
                    if secim == 5:
                        break   
        cevre_hesaplama()            
matematik()                          