#!/usr/bin/env python
from keras.models import load_model
import cv2
import numpy as np
import os
from fpdf import FPDF
import datetime
model = load_model('/root/skincancer/trained.h5')
inputfolder='/var/www/html/input'
image=os.listdir(inputfolder)
image=image[0]
inputfolder+image
input_im = cv2.imread(inputfolder+'/'+image)
input_im = cv2.resize(input_im, (224, 224), interpolation = cv2.INTER_LINEAR)
input_im = input_im / 255.
input_im = input_im.reshape(1,224,224,3)
res = np.argmax(model.predict(input_im, 1, verbose = 0), axis=1)
output=""
about=""
if res[0]==0:
    output='Actinic Keratosis'
    about="Actinic keratosis (AK), sometimes called solar keratosis or senile keratosis, is a pre-cancerous area of thick, scaly, or crusty skin. Actinic keratosis is a disorder (-osis) of epidermal keratinocytes that is induced by ultraviolet (UV) light exposure (actin-). These growths are more common in fair-skinned people and those who are frequently in the sun. They are believed to form when skin gets damaged by UV radiation from the sun or indoor tanning beds, usually over the course of decades. Given their pre-cancerous nature, if left untreated, they may turn into a type of skin cancer called squamous cell carcinoma. Untreated lesions have up to a 20% risk of progression to squamous cell carcinoma, so treatment by a dermatologist is recommended.\nActinic keratoses characteristically appear as thick, scaly, or crusty areas that often feel dry or rough. Size commonly ranges between 2 and 6 millimeters, but they can grow to be several centimeters in diameter.  Notably, AKs are often felt before they are seen, and the texture is sometimes compared to sandpaper. They may be dark, light, tan, pink, red, a combination of all these, or have the same color as the surrounding skin.\nGiven the causal relationship between sun exposure and AK growth, they often appear on a background of sun-damaged skin and in areas that are commonly sun-exposed, such as the face, ears, neck, scalp, chest, backs of hands, forearms, or lips.  Because sun exposure is rarely limited to a small area, most people who have an AK have more than one.If clinical examination findings are not typical of AK and the possibility of in situ or invasive squamous cell carcinoma (SCC) cannot be excluded based on clinical examination alone, a biopsy or excision can be considered for definitive diagnosis by histologic examination of the lesional tissue."
elif res[0]==1:
    output='Basal Cell Carcinoma'
    about='Basal-cell carcinoma (BCC), also known as basal-cell cancer, is the most common type of skin cancer. It often appears as a painless raised area of skin, which may be shiny with small blood vessels running over it. It may also present as a raised area with ulceration. Basal-cell cancer grows slowly and can damage the tissue around it, but it is unlikely to spread to distant areas or result in death.Risk factors include exposure to ultraviolet light, having lighter skin, radiation therapy, long-term exposure to arsenic and poor immune-system function. Exposure to UV light during childhood is particularly harmful. Tanning beds have become another common source of ultraviolet radiation. Diagnosis often depends on skin examination, confirmed by tissue biopsy.It remains unclear whether sunscreen affects the risk of basal-cell cancer. Treatment is typically by surgical removal. This can be by simple excision if the cancer is small; otherwise, Mohs surgery is generally recommended. Other options include electrodesiccation and curettage, cryosurgery, topical chemotherapy, photodynamic therapy, laser surgery or the use of imiquimod, a topical immune-activating medication.'
elif res[0]==2:
    output='Dermatofibroma'
    about='Dermatofibroma (superficial benign fibrous histiocytoma) is a common cutaneous nodule of unknown etiology that occurs more often in women. Dermatofibroma frequently develops on the extremities (mostly the lower legs) and is usually asymptomatic, although pruritus and tenderness can be present'
elif res[0]==3:
    output='Melanoma'
    about='Melanoma, also known as malignant melanoma, is a type of skin cancer that develops from the pigment-producing cells known as melanocytes. Melanomas typically occur in the skin but may rarely occur in the mouth, intestines or eye (uveal melanoma). In women, they most commonly occur on the legs, while in men they most commonly occur on the back. About 25% of melanomas develop from moles. Changes in a mole that can indicate melanoma include an increase in size, irregular edges, change in color, itchiness or skin breakdown.The primary cause of melanoma is ultraviolet light (UV) exposure in those with low levels of the skin pigment melanin. The UV light may be from the sun or other sources, such as tanning devices. Those with many moles, a history of affected family members and poor immune function are at greater risk. A number of rare genetic conditions such as xeroderma pigmentosum also increase the risk.'
elif res[0]==4:
    output='Nevus'
    about='Nevus (plural nevi) is a nonspecific medical term for a visible, circumscribed, chronic lesion of the skin or mucosa. The term originates from nævus, which is Latin for "birthmark"; however, a nevus can be either congenital (present at birth) or acquired. Common terms, including mole, birthmark, and beauty mark, are used to describe nevi, but these terms do not distinguish specific types of nevi from one another.'
elif res[0]==5:
    output='Pigmented Benign Keratosis'
    about="Pigmented actinic keratosis is a variant of actinic keratosis that occurs less commonly. In contrast to presenting as an erythematous plaque, its appearance can mimic a pigmented lesion (lentigo maligna or solar lentigo) or a keratinocytic lesion (lichen planus-like keratosis)."
elif res[0]==6:
    output='Seborrheic Keratosis'
    about='A seborrheic keratosis is a non-cancerous (benign) skin tumour that originates from cells in the outer layer of the skin. Like liver spots, seborrheic keratoses are seen more often as people age.The tumours (also called lesions) appear in various colours, from light tan to black. They are round or oval, feel flat or slightly elevated, like the scab from a healing wound, and range in size from very small to more than 2.5 centimetres (1 in) across. They can often come in association with other skin conditions, including basal cell carcinoma. Rarely seborrheic keratosis and basal cell carcinoma occur at the same location. At clinical examination the differential diagnosis includes warts and melanoma.'
elif res[0]==7:
    output='Squamous Cell Carcinoma'
    about='Squamous cell carcinomas (SCCs),  also known as epidermoid carcinomas, comprise a number of different types of cancer that result from squamous cells. These cells form on the surface of the skin, on the lining of hollow organs in the body, and on the lining of the respiratory and digestive tracts.Common types include:\n\nSquamous cell skin cancer: A type of skin cancer\nSquamous-cell carcinoma of the lung: A type of lung cancer\nSquamous cell thyroid carcinoma: A type of thyroid cancer\nEsophageal squamous cell carcinoma: A type of esophageal cancer\nSquamous-cell carcinoma of the vagina: A type of vaginal cancerDespite sharing the name "squamous cell carcinoma", the SCCs of different body sites can show differences in their presented symptoms, natural history, prognosis, and response to treatment.'
elif res[0]==8:
    output='Vascular Lesion'
    about='A skin condition, also known as cutaneous condition, is any medical condition that affects the integumentary system—the organ system that encloses the body and includes skin, hair, nails, and related muscle and glands. The major function of this system is as a barrier against the external environment.Conditions of the human integumentary system constitute a broad spectrum of diseases, also known as dermatoses, as well as many nonpathologic states (like, in certain circumstances, melanonychia and racquet nails). While only a small number of skin diseases account for most visits to the physician, thousands of skin conditions have been described. Classification of these conditions often presents many nosological challenges, since underlying causes and pathogenetics are often not known. Therefore, most current textbooks present a classification based on location (for example, conditions of the mucous membrane), morphology (chronic blistering conditions), cause (skin conditions resulting from physical factors), and so on.Clinically, the diagnosis of any particular skin condition is made by gathering pertinent information regarding the presenting skin lesion(s), including the location (such as arms, head, legs), symptoms (pruritus, pain), duration (acute or chronic), arrangement (solitary, generalized, annular, linear), morphology (macules, papules, vesicles), and color (red, blue, brown, black, white, yellow).'
pdf = FPDF(orientation='P', unit='mm', format='A4')
pdf.set_title('Report')
pdf.add_page() 
pdf.set_author('Smart Doctor')
pdf.set_font("Arial", size = 15)
pdf.multi_cell(200, 10, txt = "Medical Report",align = 'C',border=1)
x = datetime.datetime.now()
pdf.multi_cell(200,10,txt=str(x),align='R')
pdf.multi_cell(200,10,txt='Dear Sir,',align='L')
pdf.multi_cell(200,10,txt=f'According to our prediction , you are sufferring from {output}\n',align='C')
pdf.multi_cell(200,10,txt='About the Disease',align='C')
pdf.multi_cell(200, 10, txt = about,align = 'J')
pdf.multi_cell(200, 10, txt ='Our Suggestion for you ',align = 'C')
if output=='Actinic Keratosis':
    fr=open("/root/skincancer/Actinic keratosis.txt","r")
elif output=="Basal Cell Carcinoma":
    fr=open("/root/skincancer/Basal cell carcinoma.txt","r")
elif output=='Dermatofibroma':
    fr=open("/root/skincancer/Dermatofibroma.txt","r")
elif output=="Melanoma":
    fr=open("/root/skincancer/Melanoma.txt","r")
elif output=='Nevus':
    fr=open("/root/skincancer/Nevus.txt","r")
elif output=='Pigmented Benign Keratosis':
    fr=open("/root/skincancer/Seborrheic keratosis.txt","r")
elif output=='Seborrheic Keratosis':
    fr=open("/root/skincancer/Seborrheic keratosis.txt","r")
elif output=='Squamous Cell Carcinoma':
    fr=open("/root/skincancer/Squamous cell carcinoma.txt","r")
elif output=='Vascular Lesion':
    fr=open("/root/skincancer/Vascular lesion.txt","r")
for x in fr:
        pdf.multi_cell(200, 10, txt = x,align = 'J')      
pdf.multi_cell(200, 10, txt = 'Health is Wealth , Keep Smiling!!!',align = 'C',border=1)      
fr.close()
pdf.output("/var/www/html/output/output.pdf")