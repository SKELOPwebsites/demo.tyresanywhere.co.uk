<template>
    
    <h3 id="faq" class="font-rubik text-center lg:text-4xl sm:text-3xl text-2xl font-bold mb-8 lg:mb-16 reveal">Frequently Asked Questions</h3>

    <div class="flex flex-col lg:flex-row justify-center gap-8">
        <div class="flex-1">
            <QuestionAnswer class="border-b"
                @toggle="currentOpen === 1 ? currentOpen = null : currentOpen = 1"
                :isOpen="currentOpen === 1"
            >
                <template v-slot:default>What areas do you cover?</template>
                <template v-slot:answer>
                    We provide <span class="font-semibold">mobile tyre fitting</span> across
                    <Link href="/locations/high-wycombe" class="underline">High Wycombe</Link>,
                    <Link href="/locations/london" class="underline">London</Link>,
                    <Link href="/locations/birmingham" class="underline">Birmingham</Link>,
                    <Link href="/locations/oxford" class="underline">Oxford</Link>,
                    <Link href="/locations/reading" class="underline">Reading</Link>,
                    and many other areas along the M40 corridor. 
                    Whether you're in 
                    <Link href="/locations/watford" class="underline">Watford</Link>,
                    <Link href="/locations/milton-keynes" class="underline">Milton Keynes</Link>,
                    <Link href="/locations/bicester" class="underline">Bicester</Link>,
                    <Link href="/locations/aylesbury" class="underline">Aylesbury</Link>,
                    <Link href="/locations/slough" class="underline">Slough</Link>,
                    <Link href="/locations/uxbridge" class="underline">Uxbridge</Link>,
                    or <Link href="/locations/maidenhead" class="underline">Maidenhead</Link>,
                    our <span class="font-semibold">fully equipped vans</span> can come directly to you.
                    If you're unsure about your location,
                    <a class="text-blue-600 underline" href="tel:07442980101">give us a call</a>
                    and we'll confirm our availability.

                    <br><br>
                    You can also find the full list of our coverage area <Link href="/sitemap" class="text-blue-700 underline">here</Link>.
                </template>
            </QuestionAnswer>

            <QuestionAnswer class="border-b"
                @toggle="currentOpen === 2 ? currentOpen = null : currentOpen = 2"
                :isOpen="currentOpen === 2"
            >
                <template v-slot:default>Are you really available 24/7 for emergency tyre repairs?</template>
                <template v-slot:answer>
                    <span class="font-semibold">Yes!</span> We offer 
                    <Link href="/mobile-tyre-fitting" class="underline">24/7 emergency mobile tyre fitting</Link>
                    and
                    <Link href="/mobile-tyre-repair" class="underline">puncture repair services.</Link>
                    Whether it's late at night or early morning, our team is on standby to 
                    <span class="font-semibold">get you back on the road</span> as quickly as possible.
                </template>
            </QuestionAnswer>

            <QuestionAnswer class="border-b"
                @toggle="currentOpen === 3 ? currentOpen = null : currentOpen = 3"
                :isOpen="currentOpen === 3"
            >
                <template v-slot:default>How soon can a technician arrive if I have a flat tyre?</template>
                <template v-slot:answer>
                    In most cases, we aim to reach you <span class="font-semibold">within 60 minutes</span>, depending on your exact location and traffic conditions. 
                    We prioritise <span class="font-semibold">emergency call-outs</span> to minimise any disruption to your schedule.
                </template>
            </QuestionAnswer>

            <QuestionAnswer class="border-b"
                @toggle="currentOpen === 4 ? currentOpen = null : currentOpen = 4"
                :isOpen="currentOpen === 4"
            >
                <template v-slot:default>Can you repair a punctured tyre, or will it need replacing?</template>
                <template v-slot:answer>
                    Our technicians will inspect your tyre to see if it's safely <Link href="/mobile-tyre-repair" class="underline">repairable</Link> according to 
                    <span class="font-semibold">British Standard guidelines </span>
                    (e.g., puncture is within the central ¾ of the tread and less than 6mm in diameter). 
                    If it's beyond repair, we'll recommend a 
                    <span class="font-semibold">replacement tyre</span>—and fit it <span class="font-semibold">on the spot</span> 
                    if you approve.
                </template>
            </QuestionAnswer>

            <QuestionAnswer class="border-b"
                @toggle="currentOpen === 5 ? currentOpen = null : currentOpen = 5"
                :isOpen="currentOpen === 5"
            >
                <template v-slot:default>Do you handle car, van, and commercial vehicle tyres?</template>
                <template v-slot:answer>
                    <span class="font-semibold">Absolutely.</span> We carry a wide range of 
                    <span class="font-semibold">car tyres</span>, 
                    <span class="font-semibold">van tyres</span>, 
                    and <span class="font-semibold">commercial vehicle tyres</span>—from 
                    <span class="font-semibold">premium</span> to <span class="font-semibold">budget</span> brands. 
                    Our team is experienced in working with <span class="font-semibold">all vehicle types</span>, 
                    ensuring you get the <span class="font-semibold">best fit</span> for your needs.
                </template>
            </QuestionAnswer>

            <QuestionAnswer class="border-b"
                @toggle="currentOpen === 6 ? currentOpen = null : currentOpen = 6"
                :isOpen="currentOpen === 6"
            >
                <template v-slot:default>Can you fit run-flat or specialty tyres?</template>
                <template v-slot:answer>
                    Yes, we can <span class="font-semibold">fit and balance</span> 
                    most <span class="font-semibold">run-flat</span> and <span class="font-semibold">specialty tyres</span>. 
                    Please let us know your specific tyre requirements ahead of time 
                    so we can ensure we have the 
                    <span class="font-semibold">correct size and type</span> in stock.
                </template>
            </QuestionAnswer>

            <QuestionAnswer class="border-b"
                @toggle="currentOpen === 7 ? currentOpen = null : currentOpen = 7"
                :isOpen="currentOpen === 7"
            >
            <template v-slot:default>What does the mobile tyre fitting process involve?</template>
            <template v-slot:answer>
                Our <span class="font-semibold">mobile tyre fitter</span> arrives at your 
                <span class="font-semibold">chosen location</span> (home, work, roadside) with all the 
                <span class="font-semibold">equipment</span> needed to remove your old tyre, fit and balance the new one, and perform any necessary checks. 
                You don't need to <span class="font-semibold">travel to a garage</span>—we bring the 
                <span class="font-semibold">service</span> to you.
            </template>
            </QuestionAnswer>

            <QuestionAnswer class="border-b"
                @toggle="currentOpen === 8 ? currentOpen = null : currentOpen = 8"
                :isOpen="currentOpen === 8"
            >
                <template v-slot:default>Do you offer wheel alignment or just tyre fitting?</template>
                <template v-slot:answer>
                    We primarily focus on <Link href="/mobile-tyre-fitting" class="underline">mobile tyre fitting</Link> and 
                    <Link href="/mobile-tyre-repair" class="underline">puncture repairs</Link>. However, if you suspect alignment issues, let us know. 
                    We may be able to <span class="font-semibold">recommend a local partner</span> for a full alignment service or discuss 
                    <span class="font-semibold">in-van alignment options</span> if available.
                </template>
            </QuestionAnswer>

            <QuestionAnswer class="border-b"
                @toggle="currentOpen === 9 ? currentOpen = null : currentOpen = 9"
                :isOpen="currentOpen === 9"
            >
                <template v-slot:default>Do I need to be present during the fitting?</template>
                <template v-slot:answer>
                    It's <span class="font-semibold">ideal</span> if you can be there—especially if your vehicle has a 
                    <span class="font-semibold">locking wheel nut</span> or if we need 
                    <span class="font-semibold">secure access</span>. However, if you 
                    <span class="font-semibold">can't be present</span>, just let us know where the 
                    <span class="font-semibold">keys</span> and 
                    <span class="font-semibold">locking wheel nut</span> are. 
                    We aim to make it as convenient as possible for you.
                </template>
            </QuestionAnswer>

            <QuestionAnswer class="border-b"
                @toggle="currentOpen === 10 ? currentOpen = null : currentOpen = 10"
                :isOpen="currentOpen === 10"
            >
                <template v-slot:default>How do I pay and what are your prices?</template>
                <template v-slot:answer>
                    We offer <span class="font-semibold">transparent pricing</span> with 
                    <span class="font-semibold">no hidden costs</span>. You can pay via 
                    <span class="font-semibold">cash</span>, 
                    <span class="font-semibold">credit/debit card</span>, or 
                    <span class="font-semibold">bank transfer</span>—whichever suits you. Pricing varies based on 
                    <span class="font-semibold">tyre brand</span>, 
                    <span class="font-semibold">size</span>, and whether you require 
                    <span class="font-semibold">emergency service</span> outside of normal hours. 
                    <a class="text-blue-600 underline" href="tel:07442980101">Contact us</a>
                    for an <span class="font-semibold">instant quote</span>.
                </template>
            </QuestionAnswer>

            <QuestionAnswer class="border-b"
                @toggle="currentOpen === 11 ? currentOpen = null : currentOpen = 11"
                :isOpen="currentOpen === 11"
            >
                <template v-slot:default>What if I have multiple tyres that need changing?</template>
                <template v-slot:answer>
                    No problem at all. Just let us know how many tyres you'd like replaced. 
                    We'll bring the <span class="font-semibold">correct tyres</span> and ensure a 
                    <span class="font-semibold">quick turnaround</span>, whether you’re in 
                    <Link href="/locations/high-wycombe" class="underline">High Wycombe</Link>,
                    <Link href="/locations/london" class="underline">London</Link>,
                    <Link href="/locations/birmingham" class="underline">Birmingham</Link>, or any of our other 
                    <span class="font-semibold">service areas</span>.
                </template>
            </QuestionAnswer>

            <QuestionAnswer class="border-b"
                @toggle="currentOpen === 12 ? currentOpen = null : currentOpen = 12"
                :isOpen="currentOpen === 12"
            >
                <template v-slot:default>How do I book a mobile tyre fitting?</template>
                <template v-slot:answer>
                    Simply <a class="text-blue-600 underline" href="tel:07442980101">call us</a> or 
                    <a class="text-blue-600 underline" href="https://tyresanywhere.com/search-tyres">book online</a>. Have your 
                    <span class="font-semibold">tyre size</span> and 
                    <span class="font-semibold">vehicle details</span> handy if possible. 
                    Our team will help you pick the <span class="font-semibold">right tyres</span> and schedule a convenient 
                    <span class="font-semibold">appointment</span>—often the 
                    <span class="font-semibold">same day</span> for urgent cases.
                </template>
            </QuestionAnswer>
        </div>

        <!-- Can't find what you're looking for? -->
        <div class="flex-shrink-0 flex flex-col items-center lg:items-start justify-start p-6 rounded-lg gap-4 reveal font-rubik">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-64 h-64" viewBox="0 0 844.67538 595.26155" xmlns:xlink="http://www.w3.org/1999/xlink"><circle cx="431.39281" cy="548" r="46" fill="#E84A4F"/><path d="M883.86176,743.78487c25.7345-7.72868,53.09381-15.78786,73.50313-34.161,18.23763-16.41813,30.55024-41.48912,22.99475-66.1115-7.54-24.57187-30.12421-40.95629-53.44165-49.10532-13.225-4.62188-27.06087-7.18608-40.89147-9.20037-15.03485-2.18967-30.13615-3.98373-45.23026-5.71012q-91.67724-10.48563-184.04386-12.811c-30.38456-.76525-60.76358-.74682-91.15243-.3057-27.13937.394-55.72215.38417-80.899-11.15051-19.57846-8.96979-37.348-25.28881-42.8033-46.73352-6.29728-24.75467,5.318-49.96382,21.97993-67.892,8.78265-9.45011,19.04731-17.40385,29.63621-24.71743,11.4874-7.93416,23.37539-15.30643,35.52084-22.18813a494.63414,494.63414,0,0,1,74.7667-34.4685c12.74555-4.63445,25.68047-8.63281,38.72759-12.32143,11.017-3.11469,22.06832-6.23382,32.71588-10.47748,20.58349-8.20371,40.161-22.09985,45.39464-44.88142,4.96024-21.59145-3.40305-45.03067-18.065-61.07057-16.96282-18.557-42.53949-26.69181-67.06007-28.008-27.52842-1.47765-54.42246,5.412-80.29678,14.15585-27.59673,9.326-54.59854,20.04924-82.77827,27.60322a556.95783,556.95783,0,0,1-85.19574,15.83655c-14.08227,1.49951-28.59019,3.19273-42.75626,2.04475-11.87246-.96211-23.68426-4.45375-32.43408-12.87964-7.50252-7.22477-11.97184-17.154-10.4353-27.63238.27909-1.90318,3.17022-1.09407,2.89284.79752-1.8704,12.75513,6.79991,24.50863,17.48415,30.5293,12.34817,6.95832,27.37408,6.9678,41.1218,6.172a537.82528,537.82528,0,0,0,88.51452-12.79561c28.59252-6.53059,56.16382-15.86633,83.70391-25.83908,26.15594-9.47153,52.89665-18.71579,80.84009-20.76729,24.24611-1.78007,49.75165,1.75222,70.87426,14.42313,18.56387,11.136,32.21482,29.70722,36.56451,51.01813,4.25044,20.82462-1.63632,41.785-17.4,56.31714-16.32147,15.04633-38.7007,21.47909-59.55655,27.40368-26.45223,7.51437-52.33726,16.29809-77.39248,27.7031a485.82354,485.82354,0,0,0-72.8001,40.92805c-22.24625,15.20228-44.2007,34.33058-51.23658,61.45126-3.27739,12.63313-2.67227,26.03212,2.8116,37.96461,4.87605,10.60993,12.90656,19.53469,22.26169,26.41853,22.32074,16.42443,50.45266,19.79665,77.41421,20.13212,30.28143.37678,60.56382-.64518,90.85508-.148q92.5988,1.51977,184.81863,11.27265,23.108,2.44594,46.15759,5.40711c13.82158,1.776,27.68967,3.54058,41.27849,6.69464,24.16222,5.60822,47.67389,16.39167,62.69178,36.878a61.31938,61.31938,0,0,1,11.94709,30.44593c1.05134,11.52384-1.76985,23.0693-6.98016,33.32083-11.53233,22.69042-33.13363,37.12286-56.07337,46.60471-12.28683,5.0786-25.03167,8.926-37.7516,12.74609-1.853.55651-2.64487-2.338-.79752-2.89283Z" transform="translate(-177.66231 -152.36922)" fill="#f2f2f2"/><circle cx="125.89281" cy="69.5" r="24" fill="#f2f2f2"/><circle cx="292.39281" cy="115" r="24" fill="#f2f2f2"/><circle cx="433.39281" cy="24" r="24" fill="#f2f2f2"/><circle cx="521.39281" cy="126" r="24" fill="#f2f2f2"/><circle cx="402.39281" cy="244" r="24" fill="#f2f2f2"/><circle cx="251.39281" cy="301" r="24" fill="#f2f2f2"/><circle cx="411.39281" cy="390" r="24" fill="#f2f2f2"/><circle cx="583.39281" cy="440" r="24" fill="#f2f2f2"/><circle cx="784.39281" cy="429" r="24" fill="#f2f2f2"/><path d="M604.12763,220.37264c-71.89185.50782-130.75611,58.92987-131.77735,130.81635-.00946.66369-.01381,5.33048-.01324,11.43422a33.74778,33.74778,0,0,0,33.74387,33.746h.00007a33.76855,33.76855,0,0,0,33.76114-33.79775c-.00343-4.15211-.00551-7.02584-.00551-7.20227a64.00037,64.00037,0,1,1,98.52027,53.8794l.01171.01422s-48.02832,30.91956-62.67089,73.33545l.01245.003a94.00389,94.00389,0,0,0-3.87354,26.76794c0,3.72538.21916,36.32138.64261,62.77767a34.78649,34.78649,0,0,0,34.79009,34.22233h.00007a34.79588,34.79588,0,0,0,34.79384-35.01061c-.14706-24.22912-.22661-52.44168-.22661-54.48939,0-26.04473,25.12525-51.99475,45.76367-68.91741,23.76587-19.48694,40.86792-46.04291,47.73706-75.99909a86.7618,86.7618,0,0,0,2.49927-18.8335A132.75,132.75,0,0,0,604.12763,220.37264Z" transform="translate(-177.66231 -152.36922)" fill="#E84A4F"/><path d="M1021.147,747.63078H178.853a1.19069,1.19069,0,0,1,0-2.38137h842.294a1.19068,1.19068,0,0,1,0,2.38137Z" transform="translate(-177.66231 -152.36922)" fill="#3f3d56"/><circle cx="628.44885" cy="242.9959" r="30" fill="#2f2e41"/><polygon points="573.012 582.129 560.753 582.129 554.92 534.841 573.015 534.841 573.012 582.129" fill="#a0616a"/><path d="M551.99554,578.62562h23.64387a0,0,0,0,1,0,0v14.88687a0,0,0,0,1,0,0H537.10868a0,0,0,0,1,0,0v0A14.88686,14.88686,0,0,1,551.99554,578.62562Z" fill="#2f2e41"/><polygon points="668.012 582.129 655.753 582.129 649.92 534.841 668.015 534.841 668.012 582.129" fill="#a0616a"/><path d="M646.99554,578.62562h23.64387a0,0,0,0,1,0,0v14.88687a0,0,0,0,1,0,0H632.10868a0,0,0,0,1,0,0v0A14.88686,14.88686,0,0,1,646.99554,578.62562Z" fill="#2f2e41"/><circle cx="623.88979" cy="248.61007" r="24.56103" fill="#a0616a"/><path d="M816.19123,504.7751l10.98975-25.25a31.38253,31.38253,0,0,0-6.94971-35.6,31.87322,31.87322,0,0,0-3.07031-2.67,30.93522,30.93522,0,0,0-18.98975-6.57,32.179,32.179,0,0,0-13.3999,2.98c-.36035.16-.71.33-1.07031.5-.68994.33-1.36963.69-2.02979,1.06a31.67823,31.67823,0,0,0-15.70019,23.88l-4.8501,40.64c-1.21973,3.19-44.73975,118.39-29.51953,206.34a4.46692,4.46692,0,0,0,3.81982,3.67l15.43018,2.1a4.49661,4.49661,0,0,0,5.00976-3.53l25.89014-123.41a3.50323,3.50323,0,0,1,6.79981-.23l36.58007,129.78a4.47129,4.47129,0,0,0,4.31006,3.28,5.12184,5.12184,0,0,0,.87012-.08l18.84961-3.63a4.471,4.471,0,0,0,3.63037-4.81C850.02131,682.3351,835.3011,527.60512,816.19123,504.7751Z" transform="translate(-177.66231 -152.36922)" fill="#2f2e41"/><path d="M706.10166,421.41909A10.05576,10.05576,0,0,0,716.696,432.6225l13.72894,32.99236,10.385-15.3943-14.62937-28.97a10.11027,10.11027,0,0,0-20.07892.16852Z" transform="translate(-177.66231 -152.36922)" fill="#a0616a"/><path d="M800.19025,537.99553a10.05577,10.05577,0,0,0,8.42651-12.91316l28.88533-21.03846-17.39036-6.51224-24.76387,20.97687a10.11028,10.11028,0,0,0,4.84239,19.487Z" transform="translate(-177.66231 -152.36922)" fill="#a0616a"/><path d="M753.10188,487.61024a17.05692,17.05692,0,0,1-3.29834-.32519,16.30539,16.30539,0,0,1-11.94751-9.61621l-19.23438-23.45313a4.50075,4.50075,0,0,1,1.11109-6.68066l13.68432-8.4707a4.50007,4.50007,0,0,1,6.21533,1.49023l13.5564,22.334L779.15022,443.702A9.72146,9.72146,0,0,1,790.46,459.26356l-25.91186,23.63672A16.25271,16.25271,0,0,1,753.10188,487.61024Z" transform="translate(-177.66231 -152.36922)" fill="#2f2e41"/><path d="M823.252,522.8827c-.03515,0-.07055,0-.10571-.001a4.50783,4.50783,0,0,1-3.31079-1.57031l-12.16626-14.19336a4.49979,4.49979,0,0,1,.92041-6.67286l22.78149-15.1875-20.63842-24.8125a9.721,9.721,0,0,1,14.8872-12.18261l25.0835,24.51269a16.52481,16.52481,0,0,1-3.67529,26.94043l-20.50122,21.75391A4.50742,4.50742,0,0,1,823.252,522.8827Z" transform="translate(-177.66231 -152.36922)" fill="#2f2e41"/><path d="M795.30707,470.58358a4.63212,4.63212,0,0,1-.584-.03711,4.46111,4.46111,0,0,1-3.71045-3.06885l-9.14234-28.02929a3.08255,3.08255,0,0,1,1.594-3.72461l.29663-.14014c.269-.12793.5354-.25439.80737-.37549a32.57412,32.57412,0,0,1,13.603-3.023,31.327,31.327,0,0,1,17.16138,5.15674,3.13007,3.13007,0,0,1,.90136,4.29443L799.08393,468.504A4.45513,4.45513,0,0,1,795.30707,470.58358Z" transform="translate(-177.66231 -152.36922)" fill="#e6e6e6"/><circle cx="652.1011" cy="219.78616" r="9.81668" fill="#2f2e41"/><path d="M796.11115,361.36513h0a26,26,0,0,0-26,25.99994v11.00006h13.5293l6.4707-11,1.94141,11h41.05859l-11-11.00006A26,26,0,0,0,796.11115,361.36513Z" transform="translate(-177.66231 -152.36922)" fill="#2f2e41"/><path d="M834.80883,365.43121a15.15,15.15,0,0,1,16.48081-10.39558c6.256,1.04586,11.20228,6.07455,14.14944,11.69107s4.30806,11.90252,6.28935,17.92793,4.79124,12.08362,9.79306,15.984,12.67721,4.9584,17.58966.94607a20.11809,20.11809,0,0,1-37.47706,7.18124c-2.59206-4.61172-3.26121-10.01684-4.02988-15.251s-1.7674-10.6498-4.86211-14.94043-8.88772-7.09293-13.80374-5.13859Z" transform="translate(-177.66231 -152.36922)" fill="#2f2e41"/><path d="M515.60883,380.40755h0a33.748,33.748,0,0,1-33.74414-33.746c-.00049-6.10376.0039-10.77051.01318-11.4342a131.50724,131.50724,0,0,1,15.35889-59.90875,131.80321,131.80321,0,0,0-25.35889,75.90875c-.00928.66369-.01367,5.33044-.01318,11.4342a33.748,33.748,0,0,0,33.74414,33.746h0A33.77281,33.77281,0,0,0,538.09662,371.817,33.62247,33.62247,0,0,1,515.60883,380.40755Z" transform="translate(-177.66231 -152.36922)" fill="#3f3d56"/><path d="M606.415,291.47848a64.00385,64.00385,0,0,1,55.65918,89.413,63.9972,63.9972,0,1,0-107.42578-66.98523A63.87073,63.87073,0,0,1,606.415,291.47848Z" transform="translate(-177.66231 -152.36922)" fill="#3f3d56"/><path d="M616.79682,590.40755h0a34.78682,34.78682,0,0,1-34.79-34.22235c-.42334-26.45629-.64258-59.0523-.64258-62.77765a94.00389,94.00389,0,0,1,3.87354-26.76794l-.01221-.003a95.069,95.069,0,0,1,5.49414-12.70087,110.04745,110.04745,0,0,0-15.49414,28.70087l.01221.003a94.00389,94.00389,0,0,0-3.87354,26.76794c0,3.72535.21924,36.32136.64258,62.77765a34.78682,34.78682,0,0,0,34.79,34.22235h0a34.80287,34.80287,0,0,0,33.40185-25.04846A34.66005,34.66005,0,0,1,616.79682,590.40755Z" transform="translate(-177.66231 -152.36922)" fill="#3f3d56"/><polygon points="126.541 582.585 138.8 582.584 144.633 535.296 126.538 535.297 126.541 582.585" fill="#ffb8b8"/><path d="M301.576,731.45065H340.1067a0,0,0,0,1,0,0v14.88687a0,0,0,0,1,0,0H316.46283A14.88686,14.88686,0,0,1,301.576,731.45066v0A0,0,0,0,1,301.576,731.45065Z" transform="translate(464.05409 1325.40429) rotate(179.99738)" fill="#2f2e41"/><polygon points="82.541 582.585 94.8 582.584 100.633 535.296 82.538 535.297 82.541 582.585" fill="#ffb8b8"/><path d="M257.576,731.45065H296.1067a0,0,0,0,1,0,0v14.88687a0,0,0,0,1,0,0H272.46283A14.88686,14.88686,0,0,1,257.576,731.45066v0A0,0,0,0,1,257.576,731.45065Z" transform="translate(376.05409 1325.4063) rotate(179.99738)" fill="#2f2e41"/><path d="M270.91659,720.41068l-11.975-.62988a4.6735,4.6735,0,0,1-4.41851-4.967l14.31268-158.46594,65.911,17.78562,6.35023-1.73241L321.23868,712.68583a4.69622,4.69622,0,0,1-4.35816,3.94458l-12.9089.60147a4.67413,4.67413,0,0,1-4.93149-4.79557l2.339-84.19641a1.55813,1.55813,0,0,0-3.0832-.36007L275.739,716.69228a4.64568,4.64568,0,0,1-4.56913,3.7255C271.086,720.41778,271.00154,720.41575,270.91659,720.41068Z" transform="translate(-177.66231 -152.36922)" fill="#2f2e41"/><circle cx="128.74202" cy="249.75879" r="24.56103" fill="#ffb8b8"/><path d="M265.51193,474.28693l2.70056,58.26748.97625,21.19852a4.64221,4.64221,0,0,0,3.07432,4.17534l63.336,22.94342a4.47742,4.47742,0,0,0,1.59954.28045,4.64358,4.64358,0,0,0,4.66371-4.7881L339.2657,471.5969A36.93044,36.93044,0,0,0,308.522,435.91974c-.61263-.09345-1.23592-.18695-1.8592-.27006a36.24947,36.24947,0,0,0-29.165,9.44122,37.23612,37.23612,0,0,0-11.9859,29.196Z" transform="translate(-177.66231 -152.36922)" fill="#ccc"/><path d="M365.85452,569.24512a10.06355,10.06355,0,0,1-5.36877-15.22659l-21.478-28.56,18.53424-1.14707,17.55439,27.29693a10.111,10.111,0,0,1-9.24184,17.63673Z" transform="translate(-177.66231 -152.36922)" fill="#ffb8b8"/><path d="M350.75332,548.85022a4.64437,4.64437,0,0,1-2.54106-2.51848L315.854,469.2374a12.4634,12.4634,0,1,1,22.98438-9.64693l32.3582,77.09534a4.679,4.679,0,0,1-2.50048,6.11822l-14.36542,6.029a4.64165,4.64165,0,0,1-3.57741.01724Z" transform="translate(-177.66231 -152.36922)" fill="#ccc"/><path d="M298.50776,546.13086,329.587,486.62205a4.87826,4.87826,0,0,1,6.57494-2.06344l45.11152,23.5601a4.87826,4.87826,0,0,1,2.06343,6.57494l-31.07927,59.50881a4.87827,4.87827,0,0,1-6.57494,2.06344L300.5712,552.7058A4.87826,4.87826,0,0,1,298.50776,546.13086Z" transform="translate(-177.66231 -152.36922)" fill="#3f3d56"/><path d="M319.35062,518.94278a10.06358,10.06358,0,0,0-15.517-4.46026l-29.77845-19.75406-.05061,18.56963L302.2904,529.21a10.111,10.111,0,0,0,17.06022-10.26718Z" transform="translate(-177.66231 -152.36922)" fill="#ffb8b8"/><path d="M281.7006,523.11883l-24.33677-19.27776a17.16326,17.16326,0,0,1-7.82343-27.13518l22.09715-28.95951a10.096,10.096,0,0,1,17.1296,10.28435l-17.48384,28.6,25.694,12.18686a4.67363,4.67363,0,0,1,1.94814,6.71958l-10.37175,16.41406a4.682,4.682,0,0,1-3.16671,2.1111c-.02565.00448-.05149.00846-.0773.0123A4.69555,4.69555,0,0,1,281.7006,523.11883Z" transform="translate(-177.66231 -152.36922)" fill="#ccc"/><path d="M287.84537,418.57447a2.13479,2.13479,0,0,1,1.85636-2.81905,4.93046,4.93046,0,0,1,3.4761,1.71495,13.8334,13.8334,0,0,0,3.07115,2.63711c1.18812.59889,2.79953.51354,3.47685-.62824.63605-1.07221.20023-2.508-.18482-3.75347a36.90711,36.90711,0,0,1-1.62991-9.77c-.11092-3.70032.41115-7.562,2.45972-10.44807,2.64387-3.72475,7.37142-5.13883,11.84544-5.0363s8.87547,1.48362,13.30713,2.35665c1.52992.30139,3.32826.4555,4.35153-.73025,1.08805-1.26082.68844-3.3014.22563-5.00376-1.20094-4.41743-2.475-8.98461-5.26525-12.55224a18.89839,18.89839,0,0,0-12.06081-6.79014,28.93848,28.93848,0,0,0-13.46236,1.52838,36.09628,36.09628,0,0,0-17.68285,12.3186,29.23592,29.23592,0,0,0-5.57809,21.60019,26.66712,26.66712,0,0,0,9.88579,16.85462Z" transform="translate(-177.66231 -152.36922)" fill="#2f2e41"/><path d="M598.92043,735.14922a45.99375,45.99375,0,0,1-17.07033-71.4888,45.99715,45.99715,0,1,0,62.56892,66.464A45.96919,45.96919,0,0,1,598.92043,735.14922Z" transform="translate(-177.66231 -152.36922)" fill="#3f3d56"/></svg>

            <div class="text-center lg:text-left my-2">
                <p class="text-gray-500 sm:text-base text-sm font-light">Can't find the answer you're looking for?</p>
                <p class="font-semibold text-xl">
                    Our friendly team is here to help—24/7
                </p>
            </div>

            <div class="flex flex-col sm:flex-row gap-2">
                <!-- Chat with WhatsApp Button -->
                <button @click="emitWhatsAppToggle" class="inline-flex items-center pr-7 pl-6 py-2.5 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-600 hover:scale-105 transition duration-300">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6 mr-2">
                        <g><path style="fill-rule:evenodd;clip-rule:evenodd;" d="M20.463,3.488C18.217,1.24,15.231,0.001,12.05,0    C5.495,0,0.16,5.334,0.157,11.892c-0.001,2.096,0.547,4.142,1.588,5.946L0.057,24l6.304-1.654    c1.737,0.948,3.693,1.447,5.683,1.448h0.005c6.554,0,11.89-5.335,11.893-11.893C23.944,8.724,22.708,5.735,20.463,3.488z     M12.05,21.785h-0.004c-1.774,0-3.513-0.477-5.031-1.378l-0.361-0.214l-3.741,0.981l0.999-3.648l-0.235-0.374    c-0.99-1.574-1.512-3.393-1.511-5.26c0.002-5.45,4.437-9.884,9.889-9.884c2.64,0,5.122,1.03,6.988,2.898    c1.866,1.869,2.893,4.352,2.892,6.993C21.932,17.351,17.498,21.785,12.05,21.785z M17.472,14.382    c-0.297-0.149-1.758-0.868-2.031-0.967c-0.272-0.099-0.47-0.149-0.669,0.148s-0.767,0.967-0.941,1.166    c-0.173,0.198-0.347,0.223-0.644,0.074c-0.297-0.149-1.255-0.462-2.39-1.475c-0.883-0.788-1.48-1.761-1.653-2.059    s-0.018-0.458,0.13-0.606c0.134-0.133,0.297-0.347,0.446-0.521C9.87,9.97,9.919,9.846,10.019,9.647    c0.099-0.198,0.05-0.372-0.025-0.521C9.919,8.978,9.325,7.515,9.078,6.92c-0.241-0.58-0.486-0.501-0.669-0.51    C8.236,6.401,8.038,6.4,7.839,6.4c-0.198,0-0.52,0.074-0.792,0.372c-0.272,0.298-1.04,1.017-1.04,2.479    c0,1.463,1.065,2.876,1.213,3.074c0.148,0.198,2.095,3.2,5.076,4.487c0.709,0.306,1.263,0.489,1.694,0.626    c0.712,0.226,1.36,0.194,1.872,0.118c0.571-0.085,1.758-0.719,2.006-1.413c0.248-0.694,0.248-1.29,0.173-1.413    C17.967,14.605,17.769,14.531,17.472,14.382z"/></g>
                    </svg>
                    Chat with us
                </button>

                <!-- Call Us Button -->
                <a href="tel:07442980101" class="inline-flex items-center pr-7 pl-6 py-2.5 bg-wheelfit-300 text-white rounded-lg shadow-md hover:bg-wheelfit-400 hover:scale-105 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="white" viewBox="0 0 24 24"><path d="M21.384,17.752a2.108,2.108,0,0,1-.522,3.359,7.543,7.543,0,0,1-5.476.642C10.5,20.523,3.477,13.5,2.247,8.614a7.543,7.543,0,0,1,.642-5.476,2.108,2.108,0,0,1,3.359-.522L8.333,4.7a2.094,2.094,0,0,1,.445,2.328A3.877,3.877,0,0,1,8,8.2c-2.384,2.384,5.417,10.185,7.8,7.8a3.877,3.877,0,0,1,1.173-.781,2.092,2.092,0,0,1,2.328.445Z"/></svg>
                    Call us
                </a>
            </div>
        </div>
    </div>
</template>

<script setup>
import QuestionAnswer from '../Shared/QuestionAnswer.vue'
import { Link } from "@inertiajs/vue3"

import { ref } from "vue"
const currentOpen = ref(null);



const emitWhatsAppToggle = () => {
    const event = new CustomEvent('toggle-whatsapp');
    window.dispatchEvent(event);
};

</script>

<style scoped>

</style>
