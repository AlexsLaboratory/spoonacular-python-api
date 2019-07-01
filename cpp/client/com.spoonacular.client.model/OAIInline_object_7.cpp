/**
 * spoonacular API
 * The spoonacular Nutrition, Recipe, and Food API allows you to access over 380,000 recipes, thousands of ingredients, 80,000 food products, and 100,000 menu items. Our food ontology and semantic recipe search engine makes it possible to search for recipes using natural language queries, such as \"gluten free brownies without sugar\" or \"low fat vegan cupcakes.\" You can automatically calculate the nutritional information for any recipe, analyze recipe costs, visualize ingredient lists, find recipes for what's in your fridge, find recipes based on special diets, nutritional requirements, or favorite ingredients, classify recipes into types and cuisines, convert ingredient amounts, or even compute an entire meal plan. With our powerful API, you can create many kinds of food and especially nutrition apps.  Special diets/dietary requirements currently available include: vegan, vegetarian, pescetarian, gluten free, grain free, dairy free, high protein, whole 30, low sodium, low carb, Paleo, ketogenic, FODMAP, and Primal.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: david@spoonacular.com
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


#include "OAIInline_object_7.h"

#include "OAIHelpers.h"

#include <QJsonDocument>
#include <QJsonArray>
#include <QObject>
#include <QDebug>

namespace OpenAPI {

OAIInline_object_7::OAIInline_object_7(QString json) {
    this->init();
    this->fromJson(json);
}

OAIInline_object_7::OAIInline_object_7() {
    this->init();
}

OAIInline_object_7::~OAIInline_object_7() {

}

void
OAIInline_object_7::init() {
    
    m_ingredient_list_isSet = false;
    m_ingredient_list_isValid = false;
    
    m_servings_isSet = false;
    m_servings_isValid = false;
    
    m_measure_isSet = false;
    m_measure_isValid = false;
    
    m_view_isSet = false;
    m_view_isValid = false;
    
    m_default_css_isSet = false;
    m_default_css_isValid = false;
    
    m_show_backlink_isSet = false;
    m_show_backlink_isValid = false;
    }

void
OAIInline_object_7::fromJson(QString jsonString) {
    QByteArray array (jsonString.toStdString().c_str());
    QJsonDocument doc = QJsonDocument::fromJson(array);
    QJsonObject jsonObject = doc.object();
    this->fromJsonObject(jsonObject);
}

void
OAIInline_object_7::fromJsonObject(QJsonObject json) {
    
    m_ingredient_list_isValid = ::OpenAPI::fromJsonValue(ingredient_list, json[QString("ingredientList")]);
    
    
    m_servings_isValid = ::OpenAPI::fromJsonValue(servings, json[QString("servings")]);
    
    
    m_measure_isValid = ::OpenAPI::fromJsonValue(measure, json[QString("measure")]);
    
    
    m_view_isValid = ::OpenAPI::fromJsonValue(view, json[QString("view")]);
    
    
    m_default_css_isValid = ::OpenAPI::fromJsonValue(default_css, json[QString("defaultCss")]);
    
    
    m_show_backlink_isValid = ::OpenAPI::fromJsonValue(show_backlink, json[QString("showBacklink")]);
    
    
}

QString
OAIInline_object_7::asJson () const {
    QJsonObject obj = this->asJsonObject();
    QJsonDocument doc(obj);
    QByteArray bytes = doc.toJson();
    return QString(bytes);
}

QJsonObject
OAIInline_object_7::asJsonObject() const {
    QJsonObject obj;
	if(m_ingredient_list_isSet){
        obj.insert(QString("ingredientList"), ::OpenAPI::toJsonValue(ingredient_list));
    }
	if(servings.isSet()){
        obj.insert(QString("servings"), ::OpenAPI::toJsonValue(servings));
    }
	if(m_measure_isSet){
        obj.insert(QString("measure"), ::OpenAPI::toJsonValue(measure));
    }
	if(m_view_isSet){
        obj.insert(QString("view"), ::OpenAPI::toJsonValue(view));
    }
	if(m_default_css_isSet){
        obj.insert(QString("defaultCss"), ::OpenAPI::toJsonValue(default_css));
    }
	if(m_show_backlink_isSet){
        obj.insert(QString("showBacklink"), ::OpenAPI::toJsonValue(show_backlink));
    }
    return obj;
}


QString
OAIInline_object_7::getIngredientList() const {
    return ingredient_list;
}
void
OAIInline_object_7::setIngredientList(const QString &ingredient_list) {
    this->ingredient_list = ingredient_list;
    this->m_ingredient_list_isSet = true;
}


OAINumber
OAIInline_object_7::getServings() const {
    return servings;
}
void
OAIInline_object_7::setServings(const OAINumber &servings) {
    this->servings = servings;
    this->m_servings_isSet = true;
}


QString
OAIInline_object_7::getMeasure() const {
    return measure;
}
void
OAIInline_object_7::setMeasure(const QString &measure) {
    this->measure = measure;
    this->m_measure_isSet = true;
}


QString
OAIInline_object_7::getView() const {
    return view;
}
void
OAIInline_object_7::setView(const QString &view) {
    this->view = view;
    this->m_view_isSet = true;
}


bool
OAIInline_object_7::isDefaultCss() const {
    return default_css;
}
void
OAIInline_object_7::setDefaultCss(const bool &default_css) {
    this->default_css = default_css;
    this->m_default_css_isSet = true;
}


bool
OAIInline_object_7::isShowBacklink() const {
    return show_backlink;
}
void
OAIInline_object_7::setShowBacklink(const bool &show_backlink) {
    this->show_backlink = show_backlink;
    this->m_show_backlink_isSet = true;
}

bool
OAIInline_object_7::isSet() const {
    bool isObjectUpdated = false;
    do{ 
        if(m_ingredient_list_isSet){ isObjectUpdated = true; break;}
    
        if(servings.isSet()){ isObjectUpdated = true; break;}
    
        if(m_measure_isSet){ isObjectUpdated = true; break;}
    
        if(m_view_isSet){ isObjectUpdated = true; break;}
    
        if(m_default_css_isSet){ isObjectUpdated = true; break;}
    
        if(m_show_backlink_isSet){ isObjectUpdated = true; break;}
    }while(false);
    return isObjectUpdated;
}

bool
OAIInline_object_7::isValid() const {
    // only required properties are required for the object to be considered valid
    return m_ingredient_list_isValid && m_servings_isValid && true;
}

}
